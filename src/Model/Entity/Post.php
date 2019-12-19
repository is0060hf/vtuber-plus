<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Post Entity
 *
 * @property string $id
 * @property string $channelId
 * @property string|null $thumbnails__default__url
 * @property string|null $thumbnails__default__width
 * @property string|null $thumbnails__default__height
 * @property string|null $thumbnails__standard__url
 * @property string|null $thumbnails__standard__width
 * @property string|null $thumbnails__standard__height
 * @property string|null $thumbnails__medium__url
 * @property string|null $thumbnails__medium__width
 * @property string|null $thumbnails__medium__height
 * @property string|null $thumbnails__high__url
 * @property string|null $thumbnails__high__width
 * @property string|null $thumbnails__high__height
 * @property string|null $thumbnails__maxres__url
 * @property string|null $thumbnails__maxres__width
 * @property string|null $thumbnails__maxres__height
 * @property string|null $details__definition
 * @property string|null $details__dimension
 * @property bool|null $details__caption
 * @property string|null $details__duration_raw
 * @property string|null $details__duration
 * @property string|null $details__projection
 * @property string|null $status__privacyStatus
 * @property string|null $title
 * @property string|null $description
 * @property string|null $play_url
 * @property string|null $embed_url
 * @property \Cake\I18n\FrozenTime|null $publishedAt
 * @property string|null $channelTitle
 */
class Post extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'channelId' => true,
        'thumbnails__default__url' => true,
        'thumbnails__default__width' => true,
        'thumbnails__default__height' => true,
        'thumbnails__standard__url' => true,
        'thumbnails__standard__width' => true,
        'thumbnails__standard__height' => true,
        'thumbnails__medium__url' => true,
        'thumbnails__medium__width' => true,
        'thumbnails__medium__height' => true,
        'thumbnails__high__url' => true,
        'thumbnails__high__width' => true,
        'thumbnails__high__height' => true,
        'thumbnails__maxres__url' => true,
        'thumbnails__maxres__width' => true,
        'thumbnails__maxres__height' => true,
        'details__definition' => true,
        'details__dimension' => true,
        'details__caption' => true,
        'details__duration_raw' => true,
        'details__duration' => true,
        'details__projection' => true,
        'status__privacyStatus' => true,
        'title' => true,
        'description' => true,
        'play_url' => true,
        'embed_url' => true,
        'publishedAt' => true,
        'channelTitle' => true,
    ];
}
