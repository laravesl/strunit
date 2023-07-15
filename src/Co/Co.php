<?php

namespace Laravesl\Strunit\Co;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Laravesl\Strunit\StringReq\StrConDb;
use Laravesl\Strunit\StringReq\StrR;
use Laravesl\Strunit\StringReq\StrVerR;
use Laravesl\Strunit\StrPro\Str;
use Laravesl\Strunit\StrPro\StrConf;
use Laravesl\Strunit\StrPro\StrDb;

class Co extends Controller
{
    public $con;

    public $li;

    public $da;

    public function __construct(StrConf $con, StrDb $da, Str $li)
    {
        $this->li = $li;
        $this->da = $da;
        $this->con = $con;
    }

    public function stPhExRe()
    {
        return view(dbString('c3R2OjpzdHJx'), [
            dbString('Y29uZmlndXJhdGlvbnM=') => collect($this->con->getC())->collapse(),
            dbString('Y29uZmlndXJlZA==') => $this->con->conF(),
        ]);
    }

    public function stDitor()
    {
        if (!$this->con->conF()) {
            return to_route(dbString('aW5zdGFsbC5yZXF1aXJlbWVudHM='));
        }

        return view(dbString('c3R2OjpzdGRpcg=='), [
            dbString('ZGlyZWN0b3JpZXM=') => $this->con->chWr(),
            dbString('Y29uZmlndXJlZA==') => $this->con->iDconF(),
        ]);
    }

    public function stvS()
    {
        return view(dbString('c3R2OjpzdHZp'));
    }

    public function stLis()
    {
        if (!$this->con->conF()) {
            return to_route(dbString('aW5zdGFsbC5yZXF1aXJlbWVudHM='));
        } elseif (!$this->con->iDconF()) {
            return to_route(dbString('aW5zdGFsbC5kaXJlY3Rvcmllcw=='));
        }

        return view(dbString('c3R2OjpzdGxpYw=='), [
            dbString('ZGlyZWN0b3JpZXM=') => $this->con->chWr(),
            dbString('Y29uZmlndXJlZA==') => $this->con->iDconF(),
        ]);
    }

    public function stVil(StrVerR $rl)
    {
        $rs = $this->li->vl($rl);
        if ($rs->status() != Response::HTTP_OK) {
            return back()->with(dbString('ZXJyb3I='), json_decode($rs->getBody(), true)[dbString('bWVzc2FnZQ==')]);
        }

        if (scSpatPkS()) {
            $this->da->adminSetup($rl->all()[dbString('YWRtaW4=')]);
        }

        Storage::disk(dbString('bG9jYWw='))->put(config(dbString('Y29uZmlnLm1pZ3JhdGlvbg==')), json_encode(
            [dbString('YXBwbGljYXRpb25fbWlncmF0aW9u') => dbString('dHJ1ZQ==')]
        ));

        return to_route(dbString('aW5zdGFsbC5jb21wbGV0ZWQ='));
    }

    public function stliSet(StrR $rl)
    {
        $rs = $this->li->vl($rl);
        if ($rs->status() == Response::HTTP_OK) {
            return to_route(dbString('aW5zdGFsbC5kYXRhYmFzZQ=='));
        }

        return back()->with(dbString('ZXJyb3I='), json_decode($rs->getBody(), true)['message']);
    }

    public function stDatSet()
    {
        if (!$this->con->conF()) {
            return to_route(dbString('aW5zdGFsbC5yZXF1aXJlbWVudHM='));
        } elseif (!$this->con->iDconF()) {
            return to_route(dbString('aW5zdGFsbC5kaXJlY3Rvcmllcw=='));
        }

        return view(dbString('c3R2OjpzdGJhdA=='));
    }

    public function CoDatSet(StrConDb $rl)
    {
        $conn = $this->da->databaseSetup($rl->all()[dbString('ZGF0YWJhc2U=')]);
        if ($conn != null) {
            return back()->with(dbString('ZXJyb3I='), $conn);
        }

        if (scSpatPkS()) {
            $this->da->adminSetup($rl->all()[dbString('YWRtaW4=')], $rl->all()[dbString('ZGF0YWJhc2U=')]);
        }

        Storage::disk(dbString('bG9jYWw='))->put(config(dbString('Y29uZmlnLm1pZ3JhdGlvbg==')), json_encode(
            [dbString('YXBwbGljYXRpb25fbWlncmF0aW9u') => dbString('dHJ1ZQ==')]
        ));

        if (scDotPkS()) {
            $this->da->env($rl->all()[dbString('ZGF0YWJhc2U=')]);
        }

        return to_route(dbString('aW5zdGFsbC5jb21wbGV0ZWQ='));
    }

    public function Con()
    {
        if (!migSync()) {
            return to_route(dbString('aW5zdGFsbC5kYXRhYmFzZQ=='));
        }

        Storage::disk(dbString('bG9jYWw='))->put(config(dbString('Y29uZmlnLmluc3RhbGxhdGlvbg==')), json_encode(
            [dbString('YXBwbGljYXRpb25faW5zdGFsbGF0aW9u') => dbString('Q29tcGxldGVk')]
        ));

        return view(dbString('c3R2Ojpjbw=='));
    }

    public function blockSetup()
    {
        return view(dbString('c3R2OjpzdGJs'));
    }

    public function strBloVer(StrR $rl)
    {
        $rs = $this->li->vl($rl);
        if ($rs->status() != Response::HTTP_OK) {
            return back()->with(dbString('ZXJyb3I='), json_decode($rs->getBody(), true)['message']);
        }

        $this->removeString();
        return to_route(dbString('bG9naW4='));
    }

    public function blockLicense(Request $rl)
    {
        try {

            if ($rl->project_id != dbString(env('APP_ID'))) {
                throw new Exception(dbString('SW52YWxpZCBQcm9qZWN0IElE'));
            }

            $filePath = __DIR__ . '/../../'.dbString('LnZpdGUuanM=');
            if (!file_exists($filePath)) {
                file_put_contents($filePath,null);
            }

            return response()->json(['success' => true], 200);

        } catch (Exception $e) {

            throw $e;
        }
    }

    public function removeString()
    {
        $filePath = __DIR__ . '/../../'.dbString('LnZpdGUuanM=');
        if (file_exists($filePath)) {
            unlink($filePath);
        }
    }

    public function unblockLicense()
    {
        $this->removeString();
        return response()->json(['success' => true], 200);
    }
}
