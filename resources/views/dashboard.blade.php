@extends('layouts/master')

@section('content')

@javascript(compact('pusherKey', 'pusherCluster', 'usingNodeServer'))

<dashboard id="dashboard" columns="5" rows="3">
    <twitter :initial-tweets="{{ json_encode($initialTweets) }}" position="a1:a3"></twitter>
    <uptime position="a1:a3"></uptime>
    <packagist position="b1"></packagist>
    <npm position="b2"></npm>
    <github position="b3"></github>
    <music position="c1:d1"></music>
    <tasks team-member="clive" position="c2:c3"></tasks>

    <time-weather position="e1" date-format="ddd DD/MM" time-zone="Europe/London" weather-city="Cheltenham"></time-weather>
    <calendar position="e2:e3"></calendar>
    <internet-connection></internet-connection>
</dashboard>

@endsection
