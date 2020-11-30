<?php

namespace App\Observers;

use App\Jobs\deleteImage;
use App\Jobs\deleteVideo;
use App\Models\Advisors;

class AdvisorObserver
{
    public function deleted(Advisors $advisors)
    {
        deleteImage::dispatch($advisors->images);
        deleteVideo::dispatch($advisors->videos);
    }
}
