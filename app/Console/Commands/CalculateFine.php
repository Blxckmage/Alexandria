<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Borrowing;
use Illuminate\Console\Command;
use Illuminate\Console\Scheduling\Schedule;

class CalculateFine extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calculate:fine';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $borrowings = Borrowing::where('detail_status_kembali', 0)
            ->where('peminjaman_tgl_hrs_kembali', '<', Carbon::now())
            ->get();

        foreach ($borrowings as $borrowing) {
            $daysPastDue = Carbon::now()->diffInDays($borrowing->peminjaman_tgl_hrs_kembali);
            $finePerDay = 5000;
            $totalFine = $daysPastDue * $finePerDay;

            $borrowing->detail_denda = $totalFine;
            $borrowing->save();
        }
    }

    protected function schedule(Schedule $schedule)
    {
        $schedule->command('calculate:fine')->daily();
    }
}
