<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Borrowing;
use Illuminate\Console\Command;

class AddFine extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:fine {date?}';

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
        $date = $this->argument('date') ?? Carbon::now();
        $borrowings = Borrowing::where('detail_status_kembali', 0)
            ->where('peminjaman_tgl_hrs_kembali', '<', $date)
            ->get();

        foreach ($borrowings as $borrowing) {
            $daysPastDue = Carbon::now()->diffInDays($borrowing->peminjaman_tgl_hrs_kembali);
            $finePerDay = 5000;
            $totalFine = $daysPastDue * $finePerDay;

            $borrowing->detail_denda = $totalFine;
            $borrowing->save();
        }

        $this->info('Fine added to all overdue borrowings.');
    }
}
