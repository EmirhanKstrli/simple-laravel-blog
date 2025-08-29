<?php

return [
    'accepted'             => ':attribute kabul edilmelidir.',
    'active_url'           => ':attribute geçerli bir URL olmalıdır.',
    'after'                => ':attribute :date tarihinden sonra bir tarih olmalıdır.',
    'after_or_equal'       => ':attribute :date tarihinden sonra veya ona eşit bir tarih olmalıdır.',
    'alpha'                => ':attribute sadece harflerden oluşmalıdır.',
    'alpha_dash'           => ':attribute sadece harfler, rakamlar ve tirelerden oluşmalıdır.',
    'alpha_num'            => ':attribute sadece harfler ve rakamlar içermelidir.',
    'array'                => ':attribute dizi olmalıdır.',
    'before'               => ':attribute :date tarihinden önce bir tarih olmalıdır.',
    'before_or_equal'      => ':attribute :date tarihinden önce veya ona eşit bir tarih olmalıdır.',
    'between'              => [
        'numeric' => ':attribute :min ile :max arasında olmalıdır.',
        'file'    => ':attribute :min ile :max kilobayt arasında olmalıdır.',
        'string'  => ':attribute :min ile :max karakter arasında olmalıdır.',
        'array'   => ':attribute :min ile :max arasında nesneye sahip olmalıdır.',
    ],
    'boolean'              => ':attribute alanı doğru veya yanlış olmalıdır.',
    'confirmed'            => ':attribute tekrarı eşleşmiyor.',
    'date'                 => ':attribute geçerli bir tarih olmalıdır.',
    'date_format'          => ':attribute :format formatı ile eşleşmiyor.',
    'different'            => ':attribute ile :other birbirinden farklı olmalıdır.',
    'digits'               => ':attribute :digits rakam olmalıdır.',
    'digits_between'       => ':attribute :min ile :max arasında rakam olmalıdır.',
    'dimensions'           => ':attribute geçersiz resim ölçülerine sahip.',
    'distinct'             => ':attribute alanı tekrarlanan bir değere sahip.',
    'email'                => ':attribute geçerli bir e-posta adresi olmalıdır.',
    'exists'               => 'Seçili :attribute geçersiz.',
    'file'                 => ':attribute bir dosya olmalıdır.',
    'filled'               => ':attribute alanı doldurulmalıdır.',
    'gt'                   => [
        'numeric' => ':attribute :value değerinden büyük olmalıdır.',
        'file'    => ':attribute :value kilobayttan büyük olmalıdır.',
        'string'  => ':attribute :value karakterden uzun olmalıdır.',
        'array'   => ':attribute :value adetten fazla nesneye sahip olmalıdır.',
    ],
    'gte'                  => [
        'numeric' => ':attribute :value değerinden büyük veya eşit olmalıdır.',
        'file'    => ':attribute :value kilobayttan büyük veya eşit olmalıdır.',
        'string'  => ':attribute :value karakterden uzun veya eşit olmalıdır.',
        'array'   => ':attribute :value veya daha fazla nesneye sahip olmalıdır.',
    ],
    'image'                => ':attribute bir resim olmalıdır.',
    'in'                   => 'Seçili :attribute geçersiz.',
    'in_array'             => ':attribute alanı :other içinde mevcut değil.',
    'integer'              => ':attribute bir tam sayı olmalıdır.',
    'ip'                   => ':attribute geçerli bir IP adresi olmalıdır.',
    'ipv4'                 => ':attribute geçerli bir IPv4 adresi olmalıdır.',
    'ipv6'                 => ':attribute geçerli bir IPv6 adresi olmalıdır.',
    'json'                 => ':attribute geçerli bir JSON dizesi olmalıdır.',
    'lt'                   => [
        'numeric' => ':attribute :value değerinden küçük olmalıdır.',
        'file'    => ':attribute :value kilobayttan küçük olmalıdır.',
        'string'  => ':attribute :value karakterden kısa olmalıdır.',
        'array'   => ':attribute :value adetten az nesneye sahip olmalıdır.',
    ],
    'lte'                  => [
        'numeric' => ':attribute :value değerinden küçük veya eşit olmalıdır.',
        'file'    => ':attribute :value kilobayttan küçük veya eşit olmalıdır.',
        'string'  => ':attribute :value karakterden kısa veya eşit olmalıdır.',
        'array'   => ':attribute :value adetten fazla nesneye sahip olmamalıdır.',
    ],
    'max'                  => [
        'numeric' => ':attribute en fazla :max olmalıdır.',
        'file'    => ':attribute en fazla :max kilobayt olmalıdır.',
        'string'  => ':attribute en fazla :max karakter olmalıdır.',
        'array'   => ':attribute en fazla :max nesneye sahip olmalıdır.',
    ],
    'mimes'                => ':attribute dosya türü: :values olmalıdır.',
    'mimetypes'            => ':attribute dosya türü: :values olmalıdır.',
    'min'                  => [
        'numeric' => ':attribute en az :min olmalıdır.',
        'file'    => ':attribute en az :min kilobayt olmalıdır.',
        'string'  => ':attribute en az :min karakter olmalıdır.',
        'array'   => ':attribute en az :min nesneye sahip olmalıdır.',
    ],
    'not_in'               => 'Seçili :attribute geçersiz.',
    'not_regex'            => ':attribute formatı geçersiz.',
    'numeric'              => ':attribute bir sayı olmalıdır.',
    'present'              => ':attribute alanı mevcut olmalıdır.',
    'regex'                => ':attribute formatı geçersiz.',
    'required'             => ':attribute alanı gereklidir.',
    'required_if'          => ':attribute alanı, :other :value olduğunda gereklidir.',
    'required_unless'      => ':attribute alanı, :other :values içinde olmadığı sürece gereklidir.',
    'required_with'        => ':attribute alanı, :values mevcut olduğunda gereklidir.',
    'required_with_all'    => ':attribute alanı, :values mevcut olduğunda gereklidir.',
    'required_without'     => ':attribute alanı, :values mevcut olmadığında gereklidir.',
    'required_without_all' => ':attribute alanı, hiçbir :values mevcut olmadığında gereklidir.',
    'same'                 => ':attribute ile :other eşleşmelidir.',
    'size'                 => [
        'numeric' => ':attribute :size olmalıdır.',
        'file'    => ':attribute :size kilobayt olmalıdır.',
        'string'  => ':attribute :size karakter olmalıdır.',
        'array'   => ':attribute :size nesneye sahip olmalıdır.',
    ],
    'string'               => ':attribute bir dize olmalıdır.',
    'timezone'             => ':attribute geçerli bir bölge olmalıdır.',
    'unique'               => ':attribute daha önce alınmış.',
    'uploaded'             => ':attribute yüklenemedi.',
    'url'                  => ':attribute formatı geçersiz.',
    'uuid'                 => ':attribute geçerli bir UUID olmalıdır.',

    /*
    |--------------------------------------------------------------------------
    | Özel Doğrulama Mesajları
    |--------------------------------------------------------------------------
    |
    | Burada, "attribute.rule" kuralı için özel doğrulama mesajları
    | belirtebilirsiniz. Örneğin, 'email.required' => 'E-posta gereklidir.' gibi.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'özel-mesaj',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Özel Doğrulama Özellikleri
    |--------------------------------------------------------------------------
    |
    | Aşağıdaki satırlar, doğrulama mesajlarında kullanılan özniteliklerin
    | daha okunaklı şekilde gösterilmesini sağlar.
    |
    */

    'attributes' => [
        'name' => 'Ad Soyad',
        'email' => 'E-Posta',
        'topic' => 'Konu',
        'message' => 'Mesaj',
    ],
];