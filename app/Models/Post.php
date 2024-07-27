<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Chỉ định bảng nếu tên bảng không phải là số nhiều của tên model
    protected $table = 'posts';

    // Định nghĩa các thuộc tính có thể gán giá trị
    protected $fillable = ['title', 'content'];

    // Nếu không sử dụng timestamps
    public $timestamps = true;

    // Thêm thuộc tính ảo
    public function getExcerptAttribute()
    {
        return substr($this->content, 0, 100) . '...';
    }

    // Định nghĩa các quan hệ nếu có

}
