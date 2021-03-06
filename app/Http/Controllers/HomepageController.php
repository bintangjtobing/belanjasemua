<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blogdb;
use App\gallerydb;
use App\Mail\AddOrder;
use App\video;
use App\order;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    public function index()
    {
        $blog = blogdb::orderBy('created_at', 'DESC')->limit(3)->get();
        $galp = DB::table('gallerydbs')
            ->join('productsdbs', 'gallerydbs.product_id', '=', 'productsdbs.id')
            ->select('gallerydbs.*', 'productsdbs.*')
            ->limit(8)
            ->orderBy('gallerydbs.created_at', 'DESC')
            ->get();
        $product = DB::table('productsdbs')
            ->orderBy('productsdbs.product_name', 'ASC')
            ->select('productsdbs.*')
            ->get();
        $partner = DB::table('partners')
            ->orderBy('partners.id', 'ASC')
            ->select('partners.*')
            ->get();
        return view('homepage.index', ['blog' => $blog, 'galp' => $galp, 'product' => $product, 'partner' => $partner]);
    }
    public function blogview($judul)
    {
        $blog = DB::table('blogdbs')
            ->where('blogdbs.judul', '=', $judul)
            ->select('blogdbs.*')
            ->first();
        // dd($blog);
        $blogcollection = blogdb::orderBy('created_at', 'ASC')->limit(3)->get();
        $kategori = DB::table('productsdbs')
            ->orderBy('productsdbs.product_name', 'ASC')
            ->select('productsdbs.*')
            ->get();
        return view('homepage.blog', ['blog' => $blog, 'blogcollection' => $blogcollection, 'kategori' => $kategori]);
    }
    public function projectsview()
    {
        $blog = blogdb::orderBy('created_at', 'DESC')->paginate(9);
        return view('homepage.projects', ['blog' => $blog]);
    }
    public function galleryview()
    {
        return view('homepage.gallery.index');
    }
    public function videoview()
    {
        return view('homepage.videos.index');
    }
    public function blog()
    {
        return view('homepage.blog');
    }
    public function addorder(Request $request)
    {
        $order = new order();
        $order->produk = $request->produk;
        $order->kisaran_harga = $request->kisaran_harga;
        $order->catatan = $request->catatan;
        $order->nama_lengkap = $request->nama_lengkap;
        $order->email = $request->email;
        $order->nohp = $request->nohp;
        $order->tipe_pengiriman = $request->tipe_pengiriman;
        $order->save();
        // dd($order);
        // \Mail::raw('Hallo Tim Belanjasemua.com, permintaan rincian biaya order ' . $order->nama_lengkap, function ($message) {
        //     $message->to('handoko@infinitysolutions.co.id', 'Handoko Wu');
        //     $message->subject('Order berhasil dibuat sob!');
        // });

        \Mail::to('handoko@infinitysolutions.co.id')->send(new AddOrder($order));
        return back()->with('selamat', 'Pesanan kamu berhasil dikirim ke tim Belanjasemua.com. Tunggu respon dari email kami ya. :)');
    }
}
