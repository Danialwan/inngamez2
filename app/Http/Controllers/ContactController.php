<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
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
        return view('contact')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $message = Message::orderBy('id','desc')->paginate(4);
        $instagram = Contact::where('title',"Instagram")->first();
        $linkedin = Contact::where('title',"Linkedin")->first();
        $Facebook = Contact::where('title',"Facebook")->first();
        $Youtube = Contact::where('title',"Youtube")->first();

        $data= [
            "message" => $message,
            "instagram" => $instagram,
            "linkedin" => $linkedin,
            "facebook" => $Facebook,
            "youtube" => $Youtube
        ];
        return view('admin.contact')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('message', $request->message);
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);

        $request -> validate([
            'message' => 'required',
            'name' => 'required',
            'email' => 'required'
        ],[
            'message.required' => 'pesan wajib di isi',
            'name.required' => 'nama wajib di isi',
            'email.required' => 'email wajib di isi',
        ]);

        $data = [
            'message' => $request->input('message'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'read' => 0,
        ];

        Message::Create($data);
        return redirect('/contact')->with('messageSuccess','Pesan berhasil dikirim.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $message = Message::where('id', $id)->first();
        $instagram = Contact::where('title',"Instagram")->first();
        $linkedin = Contact::where('title',"Linkedin")->first();
        $Facebook = Contact::where('title',"Facebook")->first();
        $Youtube = Contact::where('title',"Youtube")->first();
        $data= [
            'message' => $message,
            "instagram" => $instagram,
            "linkedin" => $linkedin,
            "facebook" => $Facebook,
            "youtube" => $Youtube
        ];
        $update = [
            'read' => 1
        ];
        Message::where('id', $id)->update($update);
        return view('admin.viewMessage')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        // Hasil route bekas penerapan make controller use --resource,
        // Beberapa route yang tidak terpakai akan di redirect ke route admin/home
        return redirect('admin/home');
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateInstagram(Request $request)
    {
        $request -> validate([
            'contact' => 'required',
            'link' => 'required',
        ],[
            'contact.required' => 'contact barang wajib di isi',
            'link.required' => 'link wajib di isi',
        ]);

        $data = [
            'contact' => $request->input('contact'),
            'link' => $request->input('link')
        ];
        // return 0;
        Contact::where('title','Instagram')->update($data);
        return redirect('/admin/contact')->with('success','Instagram berhasil diperbarui!');
    }

    public function updateLinkedin(Request $request)
    {
        $request -> validate([
            'contact' => 'required',
            'link' => 'required',
        ],[
            'contact.required' => 'contact barang wajib di isi',
            'link.required' => 'link wajib di isi',
        ]);

        $data = [
            'contact' => $request->input('contact'),
            'link' => $request->input('link')
        ];
        // return 0;
        Contact::where('title','Linkedin')->update($data);
        return redirect('/admin/contact')->with('success','Linkedin berhasil diperbarui!');
    }

    public function updateFacebook(Request $request)
    {
        $request -> validate([
            'contact' => 'required',
            'link' => 'required',
        ],[
            'contact.required' => 'contact barang wajib di isi',
            'link.required' => 'link wajib di isi',
        ]);

        $data = [
            'contact' => $request->input('contact'),
            'link' => $request->input('link')
        ];
        // return 0;
        Contact::where('title','Facebook')->update($data);
        return redirect('/admin/contact')->with('success','Facebook berhasil diperbarui!');
    }

    public function updateYoutube(Request $request)
    {
        $request -> validate([
            'contact' => 'required',
            'link' => 'required',
        ],[
            'contact.required' => 'contact barang wajib di isi',
            'link.required' => 'link wajib di isi',
        ]);

        $data = [
            'contact' => $request->input('contact'),
            'link' => $request->input('link')
        ];
        // return 0;
        Contact::where('title','Youtube')->update($data);
        return redirect('/admin/contact')->with('success','Youtube berhasil diperbarui!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // return 0;
        message::where('id', $id)->delete();
        return redirect('/admin/contact')->with('delete','Pesan berhasil dihapus!');
    }
}
