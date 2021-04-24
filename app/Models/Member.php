<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    // Don't add create and update timestamps in database.
    public $timestamps  = false;

    // Table
    protected $table = 'member';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'full_name', 'email', 'password', 'bio', 'id_profile_image', 'id_banner_image', 'aura'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Get all of the news posts for the Member
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts(): HasMany
    {
        return $this->hasMany(NewsPost::class, 'id_owner');
    }

    /**
     * The post's auras that belong to the Member
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function posts_auras(): BelongsToMany
    {
        return $this->belongsToMany(NewsPost::class, 'post_aura', 'id_voter', 'id_post')->withPivot('upvote');
    }

    /**
     * Get all of the comments for the Member
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'id_owner');
    }

    /**
     * The comment's auras that belong to the Member
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function comments_auras(): BelongsToMany
    {
        return $this->belongsToMany(Comment::class, 'comment_aura', 'id_voter', 'id_comment')->withPivot('upvote');
    }

    /**
     * The topics that the Member follows
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function topics(): BelongsToMany
    {
        return $this->belongsToMany(Member::class, 'topic_follow', 'id_member', 'id_topic');
    }

    /**
     * The news posts that the Member bookmarked
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function bookmarks(): BelongsToMany
    {
        return $this->belongsToMany(NewsPost::class, 'post_bookmark', 'id_bookmarker', 'id_post');
    }

    /**
     * The members that follow the Member
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function followers(): BelongsToMany
    {
        return $this->belongsToMany(Member::class, 'member_follow', 'id_followed', 'id_follower');
    }

    /**
     * The members that the Member follows
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function following(): BelongsToMany
    {
        return $this->belongsToMany(Member::class, 'member_follow', 'id_follower', 'id_following');
    }
}
