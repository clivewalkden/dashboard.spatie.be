@extends('layouts/master')

@section('content')

@javascript(compact('pusherKey', 'pusherCluster', 'usingNodeServer'))

<dashboard id="dashboard" columns="5" rows="12">
    <twitter :initial-tweets="{{ json_encode($initialTweets) }}" position="a1:a12"></twitter>

    <packagist position="b1:b4"></packagist>
    <npm position="b5:b8"></npm>
    <github position="b9:b12"></github>

    <tasks team-member="clive" position="c5:c12"></tasks>

    <music position="c1:d4"></music>
    <uptime position="d5:d12"></uptime>

    <time-weather position="e1:e4" date-format="ddd DD/MM" time-zone="Europe/London" weather-city="Cheltenham"></time-weather>
    <calendar position="e5:e12"></calendar>
    <internet-connection></internet-connection>
</dashboard>

@endsection
