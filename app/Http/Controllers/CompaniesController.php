<?php

//use App\Http\Controllers\Auth;
//namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;
use App\Company;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;


//use App\Http\Requests\CompanyRequest;


class CompaniesController extends Controller
{
  
  public function index()
  {
    
    $companyies = Company::latest()->get();
    
    return view('companies.index', compact('companies'));
  }
  
  public function show($id)
  {
    dd('show');
    $company = Company::findOrFaid($id);
    
    return view('companies.show', compact('company'));
  }
  
  public function create()
  {
    
    return view ('companies.create');
  }
  
  public function store(CompanyRequest $request)
  {
    
    $company = new Company($request->all());
    
    Auth::user()->companies()->save($company);
    
    return redirect('companies');
  }
  
  public function edit($id)
  {
    $company = Company::findOrFail($id);
    
    return view('companies.edit', compact('company'));
  }
  
  public function update($id, CompanyRequest $request)
  {
    $company = Company::findOrFail($id);
    $company->update($request->all());
  }
  
  
}