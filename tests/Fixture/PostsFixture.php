<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PostsFixture
 */
class PostsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'string', 'length' => 32, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'ポストID', 'precision' => null],
        'channelId' => ['type' => 'string', 'length' => 128, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'チャンネルID', 'precision' => null],
        'thumbnails__default__url' => ['type' => 'string', 'length' => 512, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'デフォサムネ', 'precision' => null],
        'thumbnails__default__width' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'デフォサムネの幅', 'precision' => null],
        'thumbnails__default__height' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'デフォサムネの高さ', 'precision' => null],
        'thumbnails__standard__url' => ['type' => 'string', 'length' => 512, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'スタンダードサムネ', 'precision' => null],
        'thumbnails__standard__width' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'スタンダードサムネの幅', 'precision' => null],
        'thumbnails__standard__height' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'スタンダードサムネの高さ', 'precision' => null],
        'thumbnails__medium__url' => ['type' => 'string', 'length' => 512, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'ミッドサムネ', 'precision' => null],
        'thumbnails__medium__width' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'ミッドサムネの幅', 'precision' => null],
        'thumbnails__medium__height' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'ミッドサムネの高さ', 'precision' => null],
        'thumbnails__high__url' => ['type' => 'string', 'length' => 512, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'ハイサムネ', 'precision' => null],
        'thumbnails__high__width' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'ハイサムネの幅', 'precision' => null],
        'thumbnails__high__height' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'ハイサムネの高さ', 'precision' => null],
        'thumbnails__maxres__url' => ['type' => 'string', 'length' => 512, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'エクスハイサムネ', 'precision' => null],
        'thumbnails__maxres__width' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'エクスハイサムネの幅', 'precision' => null],
        'thumbnails__maxres__height' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'エクスハイサムネの高さ', 'precision' => null],
        'details__definition' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '解像度', 'precision' => null],
        'details__dimension' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '指標詳細', 'precision' => null],
        'details__caption' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'キャプション有無', 'precision' => null],
        'details__duration_raw' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '動画の長さ（RAW）', 'precision' => null],
        'details__duration' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '動画の長さ', 'precision' => null],
        'details__projection' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '投影形式', 'precision' => null],
        'status__privacyStatus' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'プライバシーステート', 'precision' => null],
        'title' => ['type' => 'string', 'length' => 512, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '動画タイトル', 'precision' => null],
        'description' => ['type' => 'text', 'length' => 4294967295, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '動画詳細欄', 'precision' => null],
        'play_url' => ['type' => 'string', 'length' => 512, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '再生用URL', 'precision' => null],
        'embed_url' => ['type' => 'string', 'length' => 512, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '埋め込み用URL', 'precision' => null],
        'publishedAt' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => '投稿日'],
        'channelTitle' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'チャンネル名', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 'acc3a848-8884-4b22-85b7-2b04d8bf20cb',
                'channelId' => 'Lorem ipsum dolor sit amet',
                'thumbnails__default__url' => 'Lorem ipsum dolor sit amet',
                'thumbnails__default__width' => 'Lorem ipsum dolor sit amet',
                'thumbnails__default__height' => 'Lorem ipsum dolor sit amet',
                'thumbnails__standard__url' => 'Lorem ipsum dolor sit amet',
                'thumbnails__standard__width' => 'Lorem ipsum dolor sit amet',
                'thumbnails__standard__height' => 'Lorem ipsum dolor sit amet',
                'thumbnails__medium__url' => 'Lorem ipsum dolor sit amet',
                'thumbnails__medium__width' => 'Lorem ipsum dolor sit amet',
                'thumbnails__medium__height' => 'Lorem ipsum dolor sit amet',
                'thumbnails__high__url' => 'Lorem ipsum dolor sit amet',
                'thumbnails__high__width' => 'Lorem ipsum dolor sit amet',
                'thumbnails__high__height' => 'Lorem ipsum dolor sit amet',
                'thumbnails__maxres__url' => 'Lorem ipsum dolor sit amet',
                'thumbnails__maxres__width' => 'Lorem ipsum dolor sit amet',
                'thumbnails__maxres__height' => 'Lorem ipsum dolor sit amet',
                'details__definition' => 'Lorem ipsum dolor sit amet',
                'details__dimension' => 'Lorem ipsum dolor sit amet',
                'details__caption' => 1,
                'details__duration_raw' => 'Lorem ipsum dolor sit amet',
                'details__duration' => 'Lorem ipsum dolor sit amet',
                'details__projection' => 'Lorem ipsum dolor sit amet',
                'status__privacyStatus' => 'Lorem ipsum dolor sit amet',
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'play_url' => 'Lorem ipsum dolor sit amet',
                'embed_url' => 'Lorem ipsum dolor sit amet',
                'publishedAt' => '2019-12-19 06:56:39',
                'channelTitle' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
