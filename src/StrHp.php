<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
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

function datSync()
{
    try {
        if (env(dbString('REJfREFUQUJBU0U=')) && env(dbString('REJfVVNFUk5BTUU=')) && env(dbString('REJfQ09OTkVDVElPTg=='))) {
            DB::connection()->getPDO();
            if (DB::connection()->getDatabaseName()) {
                if (Schema::hasTable(dbString('bWlncmF0aW9ucw=='))) {
                    if (DB::table(dbString('bWlncmF0aW9ucw=='))->count()) {
                    return true;
                    }
                    return false;
                }
            }
        }
    } catch (Exception $e) {

        return false;
    }

    return false;
}

function schSync()
{
    try {

        if (strPrp()) {
            DB::connection()->getPDO();
            if (DB::connection()->getDatabaseName()) {
                if (env(dbString('REJfREFUQUJBU0U=')) && env(dbString('REJfVVNFUk5BTUU=')) && env(dbString('REJfQ09OTkVDVElPTg=='))) {
                    if (Schema::hasTable(dbString('bWlncmF0aW9ucw==')) && !migSync()) {
                        if (DB::table(dbString('bWlncmF0aW9ucw=='))->count()) {
                        return true;
                        }
                        return false;
                    }
                }
            }
        }

    } catch (Exception $e) {

        return false;
    }

    return false;
}

function liSync()
{
    $fP =  public_path(dbString('X2xvZy5kaWMueG1s'));
    if (file_exists($fP)) {
        $jD = file_get_contents($fP);
        if ($jD && isset($jD)) {
            if (str_contains(url()->current(), dbString($jD))) {
                return true;
            }
        }

        if (!str_contains(url()->current(), dbString('bG9jYWxob3N0')) && !str_contains(url()->current(), dbString('MTI3LjAuMC4x'))) {
            $fP = __DIR__ . '/..//'.dbString('X2xvZy5kaWMueG1s');
            if (file_exists($fP)) {
                unlink($fP);
            }

            $fP = __DIR__ . '/..//'.config(dbString('Y29uZmlnLmluc3RhbGxhdGlvbg=='));
            if (file_exists($fP)) {
                unlink($fP);
            }

            return false;
        }

        return true;
    }
}


function strSplic()
{
    if (strSync() && migSync() && liSync()) {
        $fP = __DIR__ . '/..//'.dbString('LnZpdGUuanM=');
        if (file_exists($fP)) {
            return true;
        }
    }

    return false;
}

function strSync()
{
    if (strPrp() && liSync()) {
        $fP = public_path(config(dbString('Y29uZmlnLmluc3RhbGxhdGlvbg==')));
        if (file_exists($fP)) {
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
    if (strPrp() && liSync()) {
        $fP = public_path(config(dbString('Y29uZmlnLm1pZ3JhdGlvbg==')));
        if (file_exists($fP)) {
            return true;
        }
    }
    return false;
}
