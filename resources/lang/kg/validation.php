<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute кабыл алынышы керек.',
    'active_url' => ':attribute туура URL болуп саналбайт.',
    'after' => ':attribute датасы :date датасынан кийинки дата болуусу шарт.',
    'after_or_equal' => ':attribute датасы :date датасынан кийинки дата же дал келген дата болуусу керек.',
    'alpha' => ':attribute тамгалар болуусу шарт.',
    'alpha_dash' => ':attribute тамгаларды, цифраларды, штрихтерди же асты сызыктардан гана тура алат.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => ':attribute массив болуусу шарт.',
    'before' => ':attribute, :date датасына чейин болуусу шарт.',
    'before_or_equal' => ':attribute датасы :date датасына чейин же дал келүүсү керек.',
    'between' => [
        'numeric' => ':attribute  :min жана :max арасында болуусу зарыл.',
        'file' => ':attribute , :min жана :max арсындагы килобайт болуусу шарт.',
        'string' => 'Киргизилген :attribute  :min жана :max арасындагы узундукта болуусу зарыл.',
        'array' => ':attribute, :min жана :max арасындагы узундукта болуусу шарт.',
    ],
    'boolean' => ':attribute true же false болуусу гана шарт.',
    'confirmed' => ':attribute ырастоо дал келбейт.',
    'date' => ':attribute туура дата эмес.',
    'date_equals' => ':attribute датасы, :date датасына барабар болуусу шарт.',
    'date_format' => ':attribute маанисинин форматы, :format форматына туура келбейт.',
    'different' => ':attribute жана :other окшош болбоосу шарт.',
    'digits' => ':attribute мааниси :digits маанисине ылайык келиши керек.',
    'digits_between' => ':attribute мааниси  :min жана :max арасындагы сан болуусу шарт.',
    'dimensions' => ':attribute жараксыз сүрөт өлчөмдөрү бар.',
    'distinct' => ':attribute талаа кайталануучу мааниге ээ.',
    'email' => ':attribute туура mail эмес.',
    'ends_with' => ':attribute мааниси төмөнкүлөрдүн бири менен аякташы керек: :values.',
        'exists' => 'Тандалган :attribute жараксыз.',
    'file' => ':attribute файл болуусу шарт.',
    'filled' => ':attribute бош болуусу мүмкүн эмес.',
    'gt' => [
        'numeric' => ':attribute мааниси :value чоң болуусу шарт.',
        'file' => ':attribute өлчөму :value килобайттан чоң болуусу шарт.',
        'string' => ':attribute узундугу :value өлчөмүнөн чоң болуусу шарт .',
        'array' => ':attribute , :value өлчөмүнөн чоң болуусу шарт.',
    ],
    'gte' => [
        'numeric' => ':attribute мааниси :value чоң же барабар болуусу шарт.',
        'file' => ':attribute файл өлчөмү :value килобайттан чоң же барабар болуусу шарт.',
        'string' => ':attribute узундугу :value узундукка барабар же чоң болуусу шарт.',
        'array' => ':attribute мааниси :value  мааниден чоң же барабар өлчөмдө болуусу шарт.',
    ],
    'image' => ':attribute сүрөт болуусу зарыл.',
    'in' => 'Тандалган :attribute жараксыз.',
    'in_array' => ':attribute мааниси :other маанисинен табылбады.',
    'integer' => ':attribute мааниси бүтүн сан болуусу шарт.',
    'ip' => ':attribute жарактуу IP болуусу шарт.',
    'ipv4' => ':attribute жарактуу IPv4 адресс болуусу шарт.',
    'ipv6' => ':attribute жарактуу IPv6 адресс болуусу шарт.',
    'json' => ':attribute мааниси JSON формат болуусу шарт.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => ':attribute :max тан чоң боло албайт.',
        'file' => ':attribute өлчөмү :max килобайттан аз болуусу шарт.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => ':attribute файл жана :values типтүү болуусу шарт.',
    'mimetypes' => ':attribute : файл жана :values типтүү болуусу шарт',
    'min' => [
        'numeric' => ':attribute :min ден чоң болушу керек.',
        'file' => ':attribute жок дегенде :min килобайт болуусу шарт.',
        'string' => ':attribute жок дегенде :min белгиден болуусу керек.',
        'array' => ':attribute жок дегенде  :min өлчөмдө болуусу шарт.',
    ],
    'multiple_of' => 'The :attribute must be a multiple of :value',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => ':attribute сан болуусу шарт.',
    'password' => 'Жараксыз password',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => ':attribute сөзсүз толтурулушу керек.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => ':attribute мааниси :size өлчөмдүү болуусу керек.',
        'file' => ':attribute өлчөмү :size килобайт болуусу керек.',
        'string' => ':attribute узундугу :size болуусу керек.',
        'array' => ':attribute  :size узундукта болуусу керек.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => ':attribute string болуусу керек.',
    'timezone' => ':attribute жарактуу жагдайда болуусу керек.',
    'unique' => ':attribute кайталанбоосу керек',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => ':attribute форматы туура эмес.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
