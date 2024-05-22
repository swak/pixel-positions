<?php

test('example', function () {
    expect(true)->toBeTrue();
});

it('belongs to an employer', function () {
    // AAA
    // Arrange
    $employer = \App\Models\Employer::factory()->create();
    $job = \App\Models\Job::factory()->create([
        'employer_id' => $employer->id,
    ]);
    // Act and Assert
    expect($job->employer->is($employer))->toBeTrue();
});

it('can have tags', function () {
    // AAA
    $job = \App\Models\Job::factory()->create();

    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);
});
