@extends('layouts.main')

@section('content')
    <div class="full-height terminal">
        <div class="container">

            <div class="img">
                @if(!empty($terminal->img_path))
                    <img src="{{ URL::asset('public/img/'. $terminal->img_path .'') }}"  alt='photo'>
                @else
                    <img src="{{ URL::asset('public/img/no_photo.png') }}"  alt='no fhoto'>
                @endif
            </div>
            <div class="teminal-info">
                <table class="table">
                    <thead>
                        <tr>
                            <th>code</th>
                            <th>manufacturer</th>
                            <th>branch</th>
                            <th>state</th>
                            <th>colleague</th>
                            <th>install date</th>
                            <th>last support date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$terminal->code}}</td>
                            <td>{{$terminal->manufacturer}}</td>
                            <td>{{$terminal->branchName}}</td>
                            <td>
                                <select class="terminal-state">
                                    @foreach ($terminal->states as $state)
                                        @if($state->state_name == $terminal->stateName)
                                            <option selected value="{{$state->id}}">{{$state->state_name}}</option>
                                        @else
                                            <option value="{{$state->id}}">{{$state->state_name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </td>
                            <td>{{$terminal->colegName}}</td>
                            <td>{{$terminal->install_date}}</td>
                            <td>{{$terminal->last_support_date}}</td>
                        </tr>

                    </tbody>

                </table>
                <div data-terminalid="{{$terminal->id}}" class="btn btn-success btn-update-terminal">save</div>
            </div>
        </div>
    </div>
    @endsection