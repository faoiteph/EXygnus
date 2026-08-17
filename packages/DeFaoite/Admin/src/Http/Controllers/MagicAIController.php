<?php

namespace DeFaoite\Admin\Http\Controllers;

use Illuminate\Http\JsonResponse;
use DeFaoite\Admin\Http\Requests\MagicAI\ContentGenerationRequest;
use DeFaoite\Admin\Http\Requests\MagicAI\ImageGenerationRequest;
use DeFaoite\MagicAI\Facades\MagicAI;

class MagicAIController extends Controller
{
    /**
     * Generate text content from a prompt.
     */
    public function content(ContentGenerationRequest $request): JsonResponse
    {
        try {
            return new JsonResponse([
                'content' => MagicAI::generateContent(
                    $request->input('prompt'),
                    $request->input('model'),
                ),
            ]);
        } catch (\Exception $e) {
            return new JsonResponse(['message' => $e->getMessage()], 500);
        }
    }

    /**
     * Generate images from a prompt.
     */
    public function image(ImageGenerationRequest $request): JsonResponse
    {
        try {
            return new JsonResponse([
                'images' => MagicAI::generateImage(
                    $request->input('prompt'),
                    $request->only(['n', 'size', 'quality']),
                    $request->input('model'),
                ),
            ]);
        } catch (\Exception $e) {
            return new JsonResponse(['message' => $e->getMessage()], 500);
        }
    }
}
