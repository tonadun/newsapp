<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\NewsFormattingService;
use Illuminate\Support\Facades\Storage;

class NewsFormattingTest extends TestCase
{
    /**
     * Test Receiving id from the Json Object and
     * verify its received fine
     * @return void
     */
    public function test_format_id1()
    {

        $json_file = Storage::disk('private')->get("2020-01-02.json");
        $jsonData = json_decode($json_file, true);

        $newsFormattingService = new NewsFormattingService();
        $formattedValue = NewsFormattingService::format_id($jsonData[0]);
        $this->assertEquals("9995b261-fbbd-4716-91c8-f0fbc8ec66dc", $formattedValue);
    }

    /**
     * Test Non available scenarion
     * 
     * @return void
     */
    public function test_format_title1()
    {

        $json_file = Storage::disk('private')->get("2020-01-02.json");
        $jsonData = json_decode($json_file, true);

        $newsFormattingService = new NewsFormattingService();
        $formattedValue = $newsFormattingService->format_title($jsonData[0]);
        $this->assertNull($formattedValue);
    }

    /**
     * Test Available scenario
     * 
     * @return void
     */
    public function test_format_title2()
    {

        $json_file = Storage::disk('private')->get("2020-01-02.json");
        $jsonData = json_decode($json_file, true);

        $newsFormattingService = new NewsFormattingService();
        $formattedValue = $newsFormattingService->format_title($jsonData[2]);
        $this->assertEquals("YouTube influencers beg FTC to not limit lucrative kid-tracking data", $formattedValue);
    }

    /**
     * Test Not Available scenario
     * 
     * @return void
     */
    public function test_format_text1()
    {

        $json_file = Storage::disk('private')->get("2020-01-02.json");
        $jsonData = json_decode($json_file, true);

        $newsFormattingService = new NewsFormattingService();
        $formattedValue = $newsFormattingService->format_text($jsonData[0]);
        $this->assertNull($formattedValue);
    }

    /**
     * Test Available scenario
     * 
     * @return void
     */
    public function test_format_text2()
    {

        $json_file = Storage::disk('private')->get("2020-01-02.json");
        $jsonData = json_decode($json_file, true);

        $newsFormattingService = new NewsFormattingService();
        $formattedValue = $newsFormattingService->format_text($jsonData[2]);
        $this->assertEquals("Children are worth their weight in data to YouTube creators, who’re scrambling to stop the Federal Trade Commission from taking that income away. In response to FTC allegations that YouTube h…", $formattedValue);
    }

    /**
     * Test Not Available scenario
     * 
     * @return void
     */
    public function test_format_image_url1()
    {

        $json_file = Storage::disk('private')->get("2020-01-02.json");
        $jsonData = json_decode($json_file, true);

        $newsFormattingService = new NewsFormattingService();
        $formattedValue = $newsFormattingService->format_image_url($jsonData[0]);
        $this->assertNull($formattedValue);
    }

    /**
     * Test Available scenario
     * 
     * @return void
     */
    public function test_format_image_url2()
    {

        $json_file = Storage::disk('private')->get("2020-01-02.json");
        $jsonData = json_decode($json_file, true);

        $newsFormattingService = new NewsFormattingService();
        $formattedValue = $newsFormattingService->format_image_url($jsonData[2]);
        $this->assertEquals("https://thenypost.files.wordpress.com/2019/12/kids-youtube-rules-change.jpg?quality=90&strip=all&w=664&h=441&crop=1", $formattedValue);
    }

    /**
     * Test Not Available scenario
     * 
     * @return void
     */
    public function test_format_title_link1()
    {

        $json_file = Storage::disk('private')->get("2020-01-02.json");
        $jsonData = json_decode($json_file, true);

        $newsFormattingService = new NewsFormattingService();
        $formattedValue = $newsFormattingService->format_title_link($jsonData[0]);
        $this->assertNull($formattedValue);
    }

    /**
     * Test Available scenario
     * 
     * @return void
     */
    public function test_format_title_link2()
    {

        $json_file = Storage::disk('private')->get("2020-01-02.json");
        $jsonData = json_decode($json_file, true);

        $newsFormattingService = new NewsFormattingService();
        $formattedValue = $newsFormattingService->format_title_link($jsonData[2]);
        $this->assertEquals("https://nypost.com/2019/12/30/youtube-influencers-beg-ftc-to-not-limit-lucrative-kid-tracking-data/", $formattedValue);
    }

    /**
     * Test Not Available scenario
     * 
     * @return void
     */
    public function test_format_written_by1()
    {

        $json_file = Storage::disk('private')->get("2020-01-02.json");
        $jsonData = json_decode($json_file, true);

        $newsFormattingService = new NewsFormattingService();
        $formattedValue = $newsFormattingService->format_written_by($jsonData[0]);
        $this->assertNull($formattedValue);
    }

    /**
     * Test Available scenario
     * 
     * @return void
     */
    public function test_format_written_by2()
    {

        $json_file = Storage::disk('private')->get("2020-01-02.json");
        $jsonData = json_decode($json_file, true);

        $newsFormattingService = new NewsFormattingService();
        $formattedValue = $newsFormattingService->format_written_by($jsonData[2]);
        $this->assertEquals("Tash", $formattedValue);
    }

    /**
     * Test Not Available scenario Should return Default Image
     * 
     * @return void
     */
    public function test_format_profile_image1()
    {

        $json_file = Storage::disk('private')->get("2020-01-02.json");
        $jsonData = json_decode($json_file, true);

        $newsFormattingService = new NewsFormattingService();
        $formattedValue = $newsFormattingService->format_profile_image($jsonData[0]);
        $this->assertEquals("/storage/images/user_default.png", $formattedValue);
    }

    /**
     * Test Available scenario
     * 
     * @return void
     */
    public function test_format_profile_image2()
    {

        $json_file = Storage::disk('private')->get("2020-01-02.json");
        $jsonData = json_decode($json_file, true);

        $newsFormattingService = new NewsFormattingService();
        $formattedValue = $newsFormattingService->format_profile_image($jsonData[2]);
        $this->assertEquals("https://avatars.slack-edge.com/2018-12-21/509998492245_9fd0f38131c9d9c06622_72.png", $formattedValue);
    }

    /**
     * Test Available scenario & should be formatted to Simpler Date format
     * 
     * @return void
     */
    public function test_format_date1()
    {

        $json_file = Storage::disk('private')->get("2020-01-02.json");
        $jsonData = json_decode($json_file, true);

        $newsFormattingService = new NewsFormattingService();
        $formattedValue = $newsFormattingService->format_date($jsonData[2]);
        $this->assertEquals("Jan 02, 12:18PM", $formattedValue);
    }

}
