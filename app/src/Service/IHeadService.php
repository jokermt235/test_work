<?php
namespace App\Service;
use Symfony\Component\HttpFoundation\Request;
interface IHeadService
{
    public function getHeads();
    public function getAll(Request $request);
}