<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class UploadCode extends Component
{
    public $code;

    public $image;

    public function render()
    {
        $this->image = ($this->code) ? 'data:image/png;base64,' . base64_encode($this->getImage()) : null;

        return view('livewire.upload-code');
    }

    public function getImage($store = false)
    {
        $data = [
            'code' => $this->code,
            'backgroundColor' => '#f73d56',
            'prettify' => true,
        ];

        if ($store) {
            $data['paddingVertical'] = '300px';
        }

        // Send POST request to https://carbonara-42.herokuapp.com/api/cook with JSON body
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post('https://carbonara-42.herokuapp.com/api/cook', $data);

        return $response->getBody()->getContents();
    }

    public function storeImage()
    {
        $contents = $this->getImage(true);

        $user = auth()->user();

        Storage::disk('local')->put('public/' . $user->student_number . '.png', $contents);

        $user->update([
            'text' => $this->code,
        ]);

        return redirect()->route('dashboard');
    }
}
