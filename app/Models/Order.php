<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_cost',
        'order_id',
        'academic_level',
        'urgency',
        'subject',
        'paper_type',
        'number_pages',
        'plagiarism_report',
        'copies_sources',
        'page_summary',
        'paper_title',
        'language_style',
        'paper_style',
        'number_sources',
        'paper_details',
        'paper_file',
        'terms'
    ];

    // calculate the cost 


    public static function calculateCost($academic_level, $urgency, $number_pages, $plagiarism_report, $copies_sources, $page_summary)
    {
        $order_cost = 0;


        if ($academic_level == "High School" && $urgency < 5) {
            $order_cost = 27 * $number_pages + $copies_sources + $plagiarism_report + $page_summary;
        }
        if ($academic_level == "High School" && $urgency > 5 && $urgency < 10) {
            $order_cost = 13 * $number_pages + $copies_sources + $plagiarism_report + $page_summary;
        }
        if ($academic_level == "High School" && $urgency > 10 && $urgency < 20) {
            $order_cost = 10 * $number_pages + $copies_sources + $plagiarism_report + $page_summary;
        }
        if ($academic_level == "High School" && $urgency > 20 && $urgency <= 30) {
            $order_cost = 8 * $number_pages + $copies_sources + $plagiarism_report + $page_summary;
        }

        // college

        if ($academic_level == "College" && $urgency < 5) {
            $order_cost = 29 * $number_pages + $copies_sources + $plagiarism_report + $page_summary;
        }
        if ($academic_level == "College" && $urgency > 5 && $urgency < 10) {
            $order_cost = 13 * $number_pages + $copies_sources + $plagiarism_report + $page_summary;
        }
        if ($academic_level == "College" && $urgency > 10 && $urgency < 20) {
            $order_cost = 10 * $number_pages + $copies_sources + $plagiarism_report + $page_summary;
        }
        if ($academic_level == "College" && $urgency > 20 && $urgency <= 30) {
            $order_cost = 8 * $number_pages + $copies_sources + $plagiarism_report + $page_summary;
        }

        // Undergraduate
        if ($academic_level == "Undergraduate" && $urgency < 5) {
            $order_cost = 30 * $number_pages + $copies_sources + $plagiarism_report + $page_summary;
        }
        if ($academic_level == "Undergraduate" && $urgency > 5 && $urgency < 10) {
            $order_cost = 13 * $number_pages + $copies_sources + $plagiarism_report + $page_summary;
        }
        if ($academic_level == "Undergraduate" && $urgency > 10 && $urgency < 20) {
            $order_cost = 10 * $number_pages + $copies_sources + $plagiarism_report + $page_summary;
        }
        if ($academic_level == "Undergraduate" && $urgency > 20 && $urgency <= 30) {
            $order_cost = 8 * $number_pages + $copies_sources + $plagiarism_report + $page_summary;
        }

        // masters

        if ($academic_level == "Master" && $urgency < 5) {
            $order_cost = 30 * $number_pages + $copies_sources + $plagiarism_report + $page_summary;
        }
        if ($academic_level == "Master" && $urgency > 5 && $urgency < 10) {
            $order_cost = 13 * $number_pages + $copies_sources + $plagiarism_report + $page_summary;
        }
        if ($academic_level == "Master" && $urgency > 10 && $urgency < 20) {
            $order_cost = 10 * $number_pages + $copies_sources + $plagiarism_report + $page_summary;
        }
        if ($academic_level == "Master" && $urgency > 20 && $urgency <= 30) {
            $order_cost = 8 * $number_pages + $copies_sources + $plagiarism_report + $page_summary;
        }

        // phd 

        if ($academic_level == "Phd" && $urgency < 5) {
            $order_cost = 33 * $number_pages + $copies_sources + $plagiarism_report + $page_summary;
        }
        if ($academic_level == "Phd" && $urgency > 5 && $urgency < 10) {
            $order_cost = 13 * $number_pages + $copies_sources + $plagiarism_report + $page_summary;
        }
        if ($academic_level == "Phd" && $urgency > 10 && $urgency < 20) {
            $order_cost = 10 * $number_pages + $copies_sources + $plagiarism_report + $page_summary;
        }
        if ($academic_level == "Phd" && $urgency > 20 && $urgency <= 30) {
            $order_cost = 8 * $number_pages + $copies_sources + $plagiarism_report + $page_summary;
        }
        return $order_cost;
    }



    public static function getTotal($academic_level, $urgency, $number_pages)
    {
        $order_cost = 0;


        if ($academic_level == "High School" && $urgency < 5) {
            $order_cost = 27 * $number_pages;
        }
        if ($academic_level == "High School" && $urgency > 5 && $urgency < 10) {
            $order_cost = 13 * $number_pages;
        }
        if ($academic_level == "High School" && $urgency > 10 && $urgency < 20) {
            $order_cost = 10 * $number_pages;
        }
        if ($academic_level == "High School" && $urgency > 20 && $urgency <= 30) {
            $order_cost = 8 * $number_pages;
        }

        // college

        if ($academic_level == "College" && $urgency < 5) {
            $order_cost = 29 * $number_pages;
        }
        if ($academic_level == "College" && $urgency > 5 && $urgency < 10) {
            $order_cost = 13 * $number_pages;
        }
        if ($academic_level == "College" && $urgency > 10 && $urgency < 20) {
            $order_cost = 10 * $number_pages;
        }
        if ($academic_level == "College" && $urgency > 20 && $urgency <= 30) {
            $order_cost = 8 * $number_pages;
        }

        // Undergraduate
        if ($academic_level == "Undergraduate" && $urgency < 5) {
            $order_cost = 30 * $number_pages;
        }
        if ($academic_level == "Undergraduate" && $urgency > 5 && $urgency < 10) {
            $order_cost = 13 * $number_pages;
        }
        if ($academic_level == "Undergraduate" && $urgency > 10 && $urgency < 20) {
            $order_cost = 10 * $number_pages;
        }
        if ($academic_level == "Undergraduate" && $urgency > 20 && $urgency <= 30) {
            $order_cost = 8 * $number_pages;
        }

        // masters

        if ($academic_level == "Master" && $urgency < 5) {
            $order_cost = 30 * $number_pages;
        }
        if ($academic_level == "Master" && $urgency > 5 && $urgency < 10) {
            $order_cost = 13 * $number_pages;
        }
        if ($academic_level == "Master" && $urgency > 10 && $urgency < 20) {
            $order_cost = 10 * $number_pages;
        }
        if ($academic_level == "Master" && $urgency > 20 && $urgency <= 30) {
            $order_cost = 8 * $number_pages;
        }

        // phd 

        if ($academic_level == "Phd" && $urgency < 5) {
            $order_cost = 33 * $number_pages;
        }
        if ($academic_level == "Phd" && $urgency > 5 && $urgency < 10) {
            $order_cost = 13 * $number_pages;
        }
        if ($academic_level == "Phd" && $urgency > 10 && $urgency < 20) {
            $order_cost = 10 * $number_pages;
        }
        if ($academic_level == "Phd" && $urgency > 20 && $urgency <= 30) {
            $order_cost = 8 * $number_pages;
        }
        return $order_cost;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
    public function braintree()
    {
        return $this->hasOne(Braintree::class);
    }
    public function clientuploads()
    {
        return $this->hasMany(ClientUpload::class);
    }

    public function adminuploads()
    {
        return $this->hasMany(AdminUpload::class);
    }
}
