<?php

test('it belongs to an employer', function () {
    $employer = App\Models\Employer::factory()->create();
    $job = App\Models\Job::factory()->create([
        'employer_id'=>$employer->id,
    ]); 

    expect($job->employer->is($employer))->toBeTrue();
});


test('can have tags',function(){
    $job = App\Models\Job::factory()->create();

    $job->tag('programming');
expect($job->tags)->toHaveCount(1);
});