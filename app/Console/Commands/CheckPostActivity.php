<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;

class CheckPostActivity extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:posts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Checks which posts should be active or inactive based on the publication date and expiration date';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $posts = $this->withProgressBar(Post::all(), function ($post){
            if(now() <= $post->expiration_date){
                $post->update([
                    'status' => 1,
                ]);
            }
            else{
                $post->update([
                    'status' => 0,
                ]);
            }
            $post->save();
        });

        $this->newLine();
        $this->info("Check complete!");
    }
}
