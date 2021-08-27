<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kontak;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class KontakController extends Controller
{
    public function get_all_kontak(){
        return response()->json(Kontak::all(), 200);
    }
    public function index(){
        $kontak = Kontak::all();
        return view('admin.kontak.index', compact('kontak'));
    }
    public function create(){
        return view('admin.kontak.create');
    }
    public function store(Request $request){
        $kontak = new Kontak;
        $kontak->no_kontak        = $request->no_kontak;
        $kontak->email            = $request->email;
        $kontak->alamat            = $request->alamat;
        $kontak->save();
        return redirect('/kontak');
    }
    function sendMail(Request $request){

        $subject = "Contact dari " . $request->input('no_kontak');
        $email = $request->input('email');
        $message = $request->input('message');

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            // Pengaturan Server
           // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.mail.yahoo.com';                  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'alamatemailkamu@yahoo.com';                 // SMTP username
            $mail->Password = 'Passw0rdEmailKamu';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            // Siapa yang mengirim email
            $mail->setFrom("alamatemailkamu@yahoo.com", "Ardianta Pargo");

            // Siapa yang akan menerima email
            $mail->addAddress('info@petanikode.com', 'Petani Kode');     // Add a recipient
            // $mail->addAddress('ellen@example.com');               // Name is optional

            // ke siapa akan kita balas emailnya
            $mail->addReplyTo($emailAddress, $name);

            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name


            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->AltBody = $message;

            $mail->send();

            $request->session()->flash('status', 'Terima kasih, kami sudah menerima email anda.');
            return view('contact-form');

        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }

    }
    public function edit($id){
        $kontak = Kontak::find($id);
        return view('admin.kontak.edit', compact('kontak'));
    }
    public function update(Request $request, $id){
        $kontak = Kontak::find($id);
        $kontak->no_kontak  = $request->no_kontak;
        $kontak->email  = $request->email;
        $kontak->alamat  = $request->alamat;
        $kontak->update();
        return redirect('/kontak');
    }
    public function destroy($id){
        $kontak = Kontak::find($id);
        $kontak->delete();
        return redirect('/kontak');
    }
}
