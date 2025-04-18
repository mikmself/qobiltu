<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Message;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index($username)
    {
        try {
            $guest = Guest::where('username', $username)->first();
            if (!$guest) {
                return redirect()->route('error')->with('error', 'User not found');
            }
            return view('index', compact('guest'));
        } catch (\Exception $e) {
            Log::error('error: ' . $e->getMessage());
        }
    }
    public function storeMessage(Request $request): JsonResponse
    {
        $request->validate([
            'message' => 'required',
            'username' => 'required',
            'attendance' => 'required',
        ]);
        try {
            $guest = Guest::where('username', $request->username)->first();
            if (!$guest) {
                return response()->json(['error' => 'User not found'], 404);
            }
            Message::create([
                'guest_id' => $guest->id,
                'message' => $request->message,
                'attendance' => $request->attendance,
            ]);
            if ($request->ajax()) {
                return response()->json(['success' => 'Message sent successfully'], 200);
            }
            return redirect()->back()->with('success', 'Message sent successfully');

        } catch (\Exception $e) {
            Log::error('error: ' . $e->getMessage());
            if ($request->ajax()) {
                return response()->json(['error' => 'Terjadi kesalahan saat menyimpan pesan.'], 500);
            }
            return redirect()->route('error')->with('error', 'Terjadi kesalahan.');
        }
    }
}
