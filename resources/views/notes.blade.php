@extends('layout')
@section('content')
    <div class='form'>
        <label style='font-weight:bold;color:black;text-decoration:underline'>Submit this form to know about required number
            of denominations<br><br></label>
        <form action='/notes' method="POST">
            @csrf <br>
            <label style='font-weight:bold;color:crimson'>Enter total amount</label><br>
            <input type='number' name='amount' value='{{ old('amount') }}' /><br>
            @if ($errors->has('amount'))
                <div class="error">Please Enter Amount</div>
            @endif
            <label style='font-weight:bold;color:crimson'>Enter Denomintaion<br>
                <i style='color:blue'>(include comma for multiple denominations)</i><br></label>
            <input type='text' name='denom'value='{{ old('denom') }}' /><br>
            @if ($errors->has('denom'))
                <div class="error">Please enter currency notes in correct form ex- 100,200</div>
            @endif
            <input class='button' type='submit' value='SUBMIT' />
        </form>
    </div>
    @if(!empty($data))
    <div>
        {{var_dump($data)}}
    </div>
    @endif
@endsection
