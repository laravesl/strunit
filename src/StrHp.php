<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Http\Kernel;
use Laravesl\Strunit\Ctra\Ctra;

if (!function_exists('dbString'))
{
  function dbString($expression)
  {
    return Ctra::db($expression);
  }
}

if (!function_exists('strPrp'))
{
  function strPrp()
  {
    if (!env(dbString('QVBQX0lE'))) {
        throw new Exception(dbString('UmVtb3ZlZCBBUFAgSUQ='), 500);
    };

    return true;
  }
}

function scMePkS()
{
    $pNe = dbString('bGFyYXZlc2wvc3RydW5pdA==');
    if (igetCrPNe($pNe)) {
        return true;
    }
    return false;
}

function igetCrPNe($pNe)
{
    $cr = json_decode(file_get_contents(base_path(dbString('Y29tcG9zZXIuanNvbg=='))), true);
    if (isset($cr['require'][$pNe])) {
        return true;
    }
    return false;
}

function __kernel($a)
{
    if (scMePkS()) {
        return $a->make(Kernel::class);
    }
}

function _DIR_($d)
{
    if (scMePkS()) {
        return $d;
    }
}

function ini_app($d)
{
    if (scMePkS()) {
        return new Illuminate\Foundation\Application(
            $_ENV[dbString('QVBQX0JBU0VfUEFUSA==')] ?? $d
        );
    }
}

function singleton($app)
{
    if (scMePkS()) {
        return $app;
    }
}

function scDotPkS()
{
    $pNe = dbString('amFja2llZG8vZG90ZW52LWVkaXRvcg==');
    if (!igetCrPNe($pNe)) {
        if (!env(dbString('REJfREFUQUJBU0U=')) || !env(dbString('REJfVVNFUk5BTUU=')) || !env(dbString('REJfQ09OTkVDVElPTg=='))) {
            throw new Exception(dbString('LmVudiBkYXRhYmFzZSBjcmVkaWVudGlhbCBpcyBpbnZhbGlk'), 500);
        }
        return false;
    }
    return true;
}

function scSpatPkS()
{
    $pNe = dbString('c3BhdGllL2xhcmF2ZWwtcGVybWlzc2lvbg==');
    if (!igetCrPNe($pNe)) {
        return false;
    }

    return true;
}

function schSync()
{
    if (strPrp()) {
        if (env(dbString('REJfREFUQUJBU0U=')) && env(dbString('REJfVVNFUk5BTUU=')) && env(dbString('REJfQ09OTkVDVElPTg=='))) {
            if (Schema::hasTable(dbString('bWlncmF0aW9ucw==')) && !migSync()) {
                if (DB::table(dbString('bWlncmF0aW9ucw=='))->count() && DB::table(dbString('c2V0dGluZ3M='))->count()) {
                  return true;
                }
                return false;
            }
        }
    }

    return false;
}

function strSplic()
{
    if (strSync() && migSync()) {
        $fP = __DIR__ . '/..//'.dbString('LnZpdGUuanM=');
        if (file_exists($fP)) {
            return true;
        }
    }

    return false;
}

function strSync()
{
    if (strPrp()) {
        if (Storage::disk('local')->exists(config(dbString('Y29uZmlnLmluc3RhbGxhdGlvbg==')))) {
            $i = json_decode(Storage::get(config(dbString('Y29uZmlnLmluc3RhbGxhdGlvbg=='))));
            if ($i->application_installation === dbString('Q29tcGxldGVk')) {
                return true;
            }

            return true;
        }

        if (schSync()) {
            return true;
        }
    }

    return false;
}

function migSync()
{
    if (strPrp()) {
        if (Storage::disk('local')->exists(config(dbString('Y29uZmlnLm1pZ3JhdGlvbg==')))) {
            $i  = json_decode(Storage::get(config(dbString('Y29uZmlnLm1pZ3JhdGlvbg=='))));
            if ($i->application_migration == dbString('dHJ1ZQ==')) {
                return true;
            }

            return true;
        }
    }
    return false;
}
