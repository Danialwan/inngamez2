<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Game;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageDescription = Page::where('section', 'homeDescription')->first();
        $game = Game::all();
        $instagram = Contact::where('title', "Instagram")->first();
        $linkedin = Contact::where('title', "Linkedin")->first();
        $Facebook = Contact::where('title', "Facebook")->first();
        $Youtube = Contact::where('title', "Youtube")->first();
        $data = [
            "game" => $game,
            "page" => $pageDescription,
            "instagram" => $instagram,
            "linkedin" => $linkedin,
            "facebook" => $Facebook,
            "youtube" => $Youtube
        ];
        return view('home')->with($data);
    }
    public function indexAbout()
    {
        $pageDescription = Page::where('section', 'aboutDescription')->first();
        $instagram = Contact::where('title', "Instagram")->first();
        $linkedin = Contact::where('title', "Linkedin")->first();
        $Facebook = Contact::where('title', "Facebook")->first();
        $Youtube = Contact::where('title', "Youtube")->first();
        $data = [
            "page" => $pageDescription,
            "instagram" => $instagram,
            "linkedin" => $linkedin,
            "facebook" => $Facebook,
            "youtube" => $Youtube
        ];
        return view('about')->with($data);
    }

    public function adminHome()
    {
        $pageDescription = Page::where('section', 'homeDescription')->first();
        $game = Game::all();
        $instagram = Contact::where('title', "Instagram")->first();
        $linkedin = Contact::where('title', "Linkedin")->first();
        $Facebook = Contact::where('title', "Facebook")->first();
        $Youtube = Contact::where('title', "Youtube")->first();
        $data = [
            "game" => $game,
            "page" => $pageDescription,
            "instagram" => $instagram,
            "linkedin" => $linkedin,
            "facebook" => $Facebook,
            "youtube" => $Youtube
        ];
        return view('admin.home')->with($data);
    }
    public function adminAbout()
    {
        $pageDescription = Page::where('section', 'aboutDescription')->first();
        $instagram = Contact::where('title', "Instagram")->first();
        $linkedin = Contact::where('title', "Linkedin")->first();
        $Facebook = Contact::where('title', "Facebook")->first();
        $Youtube = Contact::where('title', "Youtube")->first();
        $data = [
            "page" => $pageDescription,
            "instagram" => $instagram,
            "linkedin" => $linkedin,
            "facebook" => $Facebook,
            "youtube" => $Youtube
        ];
        return view('admin.about')->with($data);
    }

    public function indexLogin()
    {
        $instagram = Contact::where('title', "Instagram")->first();
        $linkedin = Contact::where('title', "Linkedin")->first();
        $Facebook = Contact::where('title', "Facebook")->first();
        $Youtube = Contact::where('title', "Youtube")->first();
        $data = [
            "instagram" => $instagram,
            "linkedin" => $linkedin,
            "facebook" => $Facebook,
            "youtube" => $Youtube
        ];
        return view('login')->with($data);
    }

    public function login(Request $request)
    {
        Session::flash('email', $request->email);

        $request->validate([
            'email' =>'required',
            'password' => 'required'
        ],[
            'email.required' =>'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        $login = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $instagram = Contact::where('title', "Instagram")->first();
        $linkedin = Contact::where('title', "Linkedin")->first();
        $Facebook = Contact::where('title', "Facebook")->first();
        $Youtube = Contact::where('title', "Youtube")->first();
        $data = [
            "instagram" => $instagram,
            "linkedin" => $linkedin,
            "facebook" => $Facebook,
            "youtube" => $Youtube
        ];
        if(Auth::attempt($login)){
            return redirect('/admin/home')->with('success','Berhasil login sebagai admin');
        }
        else{
            // return 'lose';
            return redirect('/login')->with('delete','Email dan password yang anda masukan tidak valid!.');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/')->with('success', 'Berhasil Logout');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Hasil route bekas penerapan make controller use --resource,
        // Beberapa route yang tidak terpakai akan di redirect ke route admin/home
        return redirect('admin/home');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Hasil route bekas penerapan make controller use --resource,
        // Beberapa route yang tidak terpakai akan di redirect ke route admin/home
        return redirect('admin/home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        // Hasil route bekas penerapan make controller use --resource,
        // Beberapa route yang tidak terpakai akan di redirect ke route admin/home
        return redirect('admin/home');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $game = Game::where('id', $id)->first();
        $instagram = Contact::where('title', "Instagram")->first();
        $linkedin = Contact::where('title', "Linkedin")->first();
        $Facebook = Contact::where('title', "Facebook")->first();
        $Youtube = Contact::where('title', "Youtube")->first();
        $data = [
            "game" => $game,
            "instagram" => $instagram,
            "linkedin" => $linkedin,
            "facebook" => $Facebook,
            "youtube" => $Youtube
        ];
        return view('admin.editGames')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */

     public function updateLink(Request $request, string $id)
     {
        //  return 0;
         $request->validate([
             'gameLink' => 'required',
         ], [
             'gameLink.required' => 'Direct link game wajib di isi',
         ]);

         $data = [
             'link' => $request->input('gameLink'),
         ];

         game::where('id', $id)->update($data);
         return redirect('/admin/home')->with('success', 'Game berhasil diperbarui!');
     }

    public function updateImage(Request $request, string $id)
    {
        $request->validate([
            'image' => 'required|mimes:jpg,jpeg,png'
        ], [
            'image.required' => 'Gambar game wajib di isi',
            'image.mimes' => 'Gambar game Hanya diperbolehkan berekstensi JPG, JPEG, PNG'
        ]);

        $imageFile = $request->file('image');
        $imageEkstensi = $imageFile->extension();
        $imageNama = date('ymdhis') . "." . $imageEkstensi;
        $imageFile->move(public_path('images/gameImage'), $imageNama);

        $game = game::where('id', $id)->first();
        if ($game->image != 'GameIcon_01.png') {
            File::delete(public_path('images/gameImages/') . $game->image);
        } else if ($game->image != 'GameIcon_02.png') {
            File::delete(public_path('images/gameImages/') . $game->image);
        } else if ($game->image != 'GameIcon_03.png') {
            File::delete(public_path('images/gameImages/') . $game->image);
        } else if ($game->image != 'GameIcon_04.png') {
            File::delete(public_path('images/gameImages/') . $game->image);
        }

        $data = [
            'image' => $imageNama
        ];

        game::where('id', $id)->update($data);
        return redirect('/admin/home')->with('success', 'Game berhasil diperbarui!');
    }

    public function updateTitle(Request $request, string $id)

    {
        $request->validate([
            'gameTitle' => 'required',
        ], [
            'gameTitle.required' => 'Judul game wajib di isi',
        ]);

        $data = [
            'title' => $request->input('gameTitle'),
        ];

        game::where('id', $id)->update($data);
        return redirect('/admin/home')->with('success', 'Game berhasil diperbarui!');
    }

    public function updateBody(Request $request, string $id)
    {
        $request->validate([
            'gameDescription' => 'required',
        ], [
            'gameDescription.required' => 'Isi Game wajib di isi',
        ]);

        $data = [
            'description' => $request->input('gameDescription'),
        ];

        game::where('id', $id)->update($data);
        return redirect('/admin/home')->with('success', 'Game berhasil diperbarui!');
    }

    public function updateHome(Request $request)
    {
        $request->validate([
            'pageDescription' => 'required',
        ], [
            'pageDescription.required' => 'Deskripsi Page wajib di isi',
        ]);

        $data = [
            'text' => $request->input('pageDescription'),
        ];

        Page::where('section', 'homeDescription')->update($data);
        return redirect('/admin/home')->with('success', 'Deskripsi page berhasil diperbarui!');
    }
    public function updateAbout(Request $request)
    {
        $request->validate([
            'pageDescription' => 'required',
        ], [
            'pageDescription.required' => 'Deskripsi Page wajib di isi',
        ]);

        $data = [
            'text' => $request->input('pageDescription'),
        ];

        Page::where('section', 'aboutDescription')->update($data);
        return redirect('/admin/about')->with('success', 'Deskripsi page berhasil diperbarui!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        // Hasil route bekas penerapan make controller use --resource,
        // Beberapa route yang tidak terpakai akan di redirect ke route admin/home
        return redirect('admin/home');
    }
}
