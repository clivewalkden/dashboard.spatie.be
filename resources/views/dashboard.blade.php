@extends('layouts/master')

@section('content')

    @javascript(compact('pusherKey', 'clientConnectionPath', 'environment', 'openWeatherMapKey'))

    <dashboard id="dashboard" columns="5" rows="12">
        <twitter :initial-tweets="{{ json_encode($initialTweets) }}" position="a1:a12"></twitter>

        <statistics position="b1:b12"></statistics>

        <music position="c1:d4"></music>
        <tasks team-member="clive" avatat="{{ gravatar('clive@sozodesign.co.uk') }}" birthday="1981-06-23" position="c5:c12"></tasks>

        <uptime position="d5:d12"></uptime>

        <time-weather position="e1:e4" date-format="ddd DD/MM" time-zone="Europe/London" weather-city="Cheltenham"></time-weather>
        <calendar position="e5:e12"></calendar>
        <internet-connection></internet-connection>
    </dashboard>

@endsection
