<?php

class MedicalCategory extends Eloquent {

	protected $table = 'medical_category';

	public static $rules = array
    (
        'name' => 'required|between:1,150',
    );
}
