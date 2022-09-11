<?php

namespace Tests\Unit\Services;

use App\Services\TweetService;
use PHPUnit\Framework\TestCase;

class TweetServiceTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_check_own_tweet()
    {
        $tweetService = new TweetService();

        $result = $tweetService->checkOwnTweet(1, 1);
        $this->assertTrue($result);

        $result = $tweetService->checkOwnTweet(2, 1);
        $this->assertFalse($result);
    }
}
