@extends('errors.layout')

@section('title', __('too many requests'))
@section('code', '429')
@section('message', __('too many requests'))
