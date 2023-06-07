<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){
        $title       = 'Home';
        $description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt praesentium exercitationem nemo ut nostrum adipisci quia ex voluptatem placeat pariatur asperiores cupiditate tenetur temporibus incidunt aliquid magni ducimus architecto suscipit, quod harum qui. Maxime sint quidem rem nobis quisquam inventore dolorem corrupti incidunt facere. Sit mollitia voluptate numquam tenetur provident. Consequuntur, ipsum sapiente dignissimos perferendis velit laborum assumenda dicta dolorum nisi, odio ad asperiores cum, quibusdam doloribus repellendus. Quidem odit perferendis numquam animi repellat nostrum eligendi a ipsum perspiciatis, distinctio, consequatur modi dignissimos, facere alias quo? Aliquid quas, optio saepe a soluta voluptatem iste voluptas amet laboriosam velit fuga excepturi voluptatum id, unde voluptates ex et, expedita delectus dignissimos atque? Repudiandae harum, soluta quasi in explicabo enim laborum omnis aspernatur, tenetur eveniet eaque nemo iste nobis sit necessitatibus. Nihil alias harum magni ipsa perferendis explicabo vero dolorum quaerat facere inventore fugit officia ut cupiditate voluptates ducimus, qui voluptas ullam esse.';

        return view('home', compact('title', 'description'));
    }

    public function books(){
        return view('books');
    }

    public function contacts(){
        $title      = 'Contatti';
        $contact    = 'Marco Cancelliere';
        $email      = 'marcocancelliere54@gmail.com';


        return view('contacts', compact('title','contact','email'));
    }
}
