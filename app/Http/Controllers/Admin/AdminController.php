<?

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Kategori
    public function kategoriIndex()
    {
        // Logic untuk menampilkan daftar kategori
        return view('admin.kategori.index');
    }

    public function kategoriForm()
    {
        // Logic untuk menampilkan formulir kategori
        return view('admin.kategori.form');
    }

    public function kategoriSave(Request $request)
    {
        // Logic untuk menyimpan data kategori
        // ...
    }

    public function kategoriUpdate(Request $request, $id)
    {
        // Logic untuk mengupdate data kategori berdasarkan ID
        // ...
    }

    public function kategoriDelete($id)
    {
        // Logic untuk menghapus data kategori berdasarkan ID
        // ...
    }

    // Post
    public function postIndex()
    {
        // Logic untuk menampilkan daftar post
        return view('admin.post.index');
    }

    public function postForm()
    {
        // Logic untuk menampilkan formulir post
        return view('admin.post.form');
    }

    public function postSave(Request $request)
    {
        // Logic untuk menyimpan data post
        // ...
    }

    public function postUpdate(Request $request, $id)
    {
        // Logic untuk mengupdate data post berdasarkan ID
        // ...
    }

    public function postDelete($id)
    {
        // Logic untuk menghapus data post berdasarkan ID
        // ...
    }
}
