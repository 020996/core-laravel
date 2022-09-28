<?php

namespace App\Components;


// $articles->shards(); Truy cập mảng phân đoạn:

// $articles->maxScore();   Truy cập số điểm tối đa

// $articles->timedOut(); Truy cập thuộc tính boolean đã hết thời gian

// $articles->took();  Truy cập tài sản đã lấy

// $articles->getAggregations();  Truy cập tập hợp tìm kiếm - Xem Tổng hợp để biết chi tiết

// must: Các kết quả PHẢI thỏa mãn các câu query

// must_not: Các kết quả PHẢI KHÔNG thỏa mãn các câu query

// should: Các kết quả thỏa mãn MỘT TRONG các câu query


class QueryElastic
{
    public static  $param = [
        'body' => [
            'size' => 10,
            'query' => [
                'bool' => [
                    'must' => [
                        // 'match' => [
                        //     'username' => 'khánh'

                        // ]
                        "wildcard" => ["username" => "mark*"]
                    ],

                    // 'must' => [
                    //     "match" => [
                    //         "username" => [
                    //             "query" => "pre",
                    //             "type" => "phrase_prefix"
                    //         ]
                    //     ]
                    // ]

                    // 'must' => [
                    //     "range" => [
                    //         "id" => [
                    //             "gte" => 10,
                    //             "lte" => 20
                    //         ]
                    //     ],
                    // ]


                    // 'should' => [
                    //     ['term' => [
                    //         'username' => 'khánh',
                    //     ]],
                    //     ['term' => [
                    //         'id' => 2,
                    //     ]]
                    // ]

                ]

            ],
            "sort" =>  [
                [
                    "id" => [
                        "order" => "asc"
                    ]
                ]

            ]
        ]
    ];
}
