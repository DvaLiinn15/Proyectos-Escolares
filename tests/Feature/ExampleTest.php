<?php

<<<<<<< HEAD
it('returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
=======
test('returns a successful response', function () {
    $response = $this->get(route('home'));

    $response->assertStatus(200);
});
>>>>>>> 1f12e9d397c5bc6da41e148a08dcaed57bdc64e0
