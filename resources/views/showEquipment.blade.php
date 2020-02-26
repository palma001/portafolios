@extends('layouts.app_front')
@section('title', $setting->header_title)
@section('favicon', Storage::url($setting->favicon))
@section('facebook', $setting->facebook_link)
@section('twitter', $setting->twitter_link)
@section('instagram', $setting->instagram_link)
@section('phone', $setting->phone)
@section('email', $setting->email)
@section('address', $setting->address)