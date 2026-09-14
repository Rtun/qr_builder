<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    /**
     * Genera un código QR en formato SVG o Base64.
     */
    public function generate(Request $request)
    {
        $request->validate([
            'content' => 'required|string|max:2048',
            'size'    => 'nullable|integer|min:50|max:1000',
            'color'   => 'nullable|string', // Formato Hex: #FF0000
        ]);

        $content = $request->input('content');
        $size    = $request->input('size', 250);

        // Instanciar el generador
        $qr = QrCode::size($size)
            ->format('svg')
            ->margin(1);

        // Procesar color personalizado si se envía
        if ($request->filled('color')) {
            $hex = ltrim($request->input('color'), '#');
            if (strlen($hex) === 6) {
                $r = hexdec(substr($hex, 0, 2));
                $g = hexdec(substr($hex, 2, 2));
                $b = hexdec(substr($hex, 4, 2));
                $qr->color($r, $g, $b);
            }
        }

        // Generar el SVG en string
        $svgOutput = $qr->generate($content);

        return response()->json([
            'success' => true,
            'content' => $content,
            'qr_svg'  => (string) $svgOutput,
        ]);
    }

    public function configuration() {
        return view('qrs.configuration');
    }
}