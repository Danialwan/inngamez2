<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Inertia\Inertia;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        $instagram = Contact::where('title',"Instagram")->first();
        $linkedin = Contact::where('title',"Linkedin")->first();
        $Facebook = Contact::where('title',"Facebook")->first();
        $Youtube = Contact::where('title',"Youtube")->first();
        $data= [
            'news' => $news,
            "instagram" => $instagram,
            "linkedin" => $linkedin,
            "facebook" => $Facebook,
            "youtube" => $Youtube
        ];
        return view('news')->with($data);
    }
    public function admin()
    {
        $news = News::all();
        $instagram = Contact::where('title',"Instagram")->first();
        $linkedin = Contact::where('title',"Linkedin")->first();
        $Facebook = Contact::where('title',"Facebook")->first();
        $Youtube = Contact::where('title',"Youtube")->first();
        $data= [
            'news' => $news,
            "instagram" => $instagram,
            "linkedin" => $linkedin,
            "facebook" => $Facebook,
            "youtube" => $Youtube
        ];
        return view('admin.news')->with($data);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $instagram = Contact::where('title',"Instagram")->first();
        $linkedin = Contact::where('title',"Linkedin")->first();
        $Facebook = Contact::where('title',"Facebook")->first();
        $Youtube = Contact::where('title',"Youtube")->first();
        $data= [
            "instagram" => $instagram,
            "linkedin" => $linkedin,
            "facebook" => $Facebook,
            "youtube" => $Youtube
        ];
        return view('admin.createNews')->with($data);
        // return Inertia::render('')
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('newsTitle', $request->newsTitle);
        Session::flash('newsContent', $request->newsContent);

        $request -> validate([
            'newsTitle' => 'required',
            'newsContent' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png'
        ],[
            'newsTitle.required' => 'Judul berita wajib di isi',
            'newsContent.required' => 'Isi Berita wajib di isi',
            'image.required' => 'Gambar berita wajib di isi',
            'image.mimes' => 'Gambar berita Hanya diperbolehkan berekstensi JPG, JPEG, PNG'
        ]);

        $imageFile = $request->file('image');
        $imageEkstensi = $imageFile->extension();

        $imageNama = date('ymdhis').".".$imageEkstensi;
        $imageFile->move(public_path('images/NewsImages'),$imageNama);

        $data = [
            'title' => $request->input('newsTitle'),
            'body' => $request->input('newsContent'),
            'image' => $imageNama
        ];

        News::Create($data);
        return redirect('/admin/news')->with('success','Berita berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $news = News::where('id',$id)->first();
        $recommendation = $news::paginate(4);
        $instagram = Contact::where('title',"Instagram")->first();
        $linkedin = Contact::where('title',"Linkedin")->first();
        $Facebook = Contact::where('title',"Facebook")->first();
        $Youtube = Contact::where('title',"Youtube")->first();
        $data= [
            'news' => $news,
            'recommendation' => $recommendation,
            "instagram" => $instagram,
            "linkedin" => $linkedin,
            "facebook" => $Facebook,
            "youtube" => $Youtube
        ];
        return view('newsDetail')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = News::where('id',$id)->first();
        $recommendation = $news::paginate(4);
        $instagram = Contact::where('title',"Instagram")->first();
        $linkedin = Contact::where('title',"Linkedin")->first();
        $Facebook = Contact::where('title',"Facebook")->first();
        $Youtube = Contact::where('title',"Youtube")->first();
        $data= [
            'news' => $news,
            'recommendation' => $recommendation,
            "instagram" => $instagram,
            "linkedin" => $linkedin,
            "facebook" => $Facebook,
            "youtube" => $Youtube
        ];
        return view('admin.editNews')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateImage(Request $request, string $id)
    {
        $request -> validate([
            'image' => 'required|mimes:jpg,jpeg,png'
        ],[
            'image.required' => 'Gambar berita wajib di isi',
            'image.mimes' => 'Gambar berita Hanya diperbolehkan berekstensi JPG, JPEG, PNG'
        ]);

        $imageFile = $request->file('image');
        $imageEkstensi = $imageFile->extension();
        $imageNama = date('ymdhis').".".$imageEkstensi;
        $imageFile->move(public_path('images/NewsImages'),$imageNama);

        $news = News::where('id', $id)->first();
        if ($news->image != 'Example.png') {
            File::delete(public_path('images/NewsImages/').$news->image);
        }

        $data = [
          'image' => $imageNama
        ];

        News::where('id', $id)->update($data);
        return redirect('/admin/news')->with('success','Berita berhasil diperbarui!');
    }

    public function updateTitle(Request $request, string $id)

    {
        $request -> validate([
            'newsTitle' => 'required',
        ],[
            'newsTitle.required' => 'Judul berita wajib di isi',
        ]);

        $data = [
            'title' => $request->input('newsTitle'),
        ];

        News::where('id', $id)->update($data);
        return redirect('/admin/news')->with('success','Berita berhasil diperbarui!');
    }

    public function updateBody(Request $request, string $id)
    {
        $request -> validate([
            'newsContent' => 'required',
        ],[
            'newsContent.required' => 'Isi Berita wajib di isi',
        ]);

        $data = [
            'body' => $request->input('newsContent'),
        ];

        News::where('id', $id)->update($data);
        return redirect('/admin/news')->with('success','Berita berhasil diperbarui!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = News::where('id', $id)->first();
        if ($news->image != 'Example') {
            File::delete(public_path('images/gameImages/') . $news->image);
        }
        News::where('id', $id)->delete();
        return redirect('/admin/news')->with('delete','Berita berhasil dihapus!');
    }
}
