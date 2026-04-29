<?php 
// Eloquent ORM Practice - --30-04-2026 
// Topic: Eager Loading to prevent N+1 problem 
 
// BAD - N+1 problem 
// $orders = Order::all(); 
// foreach ($orders as $order) { $order->user->name; } 
 
// GOOD - Eager loading 
// $orders = Order::with('user')->get(); 
 
// Nested eager loading 
// $orders = Order::with('user.profile')->get(); 
