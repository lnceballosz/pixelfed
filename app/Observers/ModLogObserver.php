<?php

/*
 * SPDX-FileCopyrightText: 2018 Daniel Supernault 
 * SPDX-License-Identifier: AGPL-3.0-only
 */

namespace App\Observers;

use App\Notification;
use App\ModLog;
use App\Services\ModLogService;
use Log;

class ModLogObserver
{
    /**
     * Handle the mod log "created" event.
     *
     * @param  \App\ModLog  $modLog
     * @return void
     */
    public function created(ModLog $modLog)
    {
        ModLogService::boot()->load($modLog)->fanout();
    }

    /**
     * Handle the mod log "updated" event.
     *
     * @param  \App\ModLog  $modLog
     * @return void
     */
    public function updated(ModLog $modLog)
    {
        ModLogService::boot()->load($modLog)->fanout();
    }

    /**
     * Handle the mod log "deleted" event.
     *
     * @param  \App\ModLog  $modLog
     * @return void
     */
    public function deleted(ModLog $modLog)
    {
        ModLogService::boot()->load($modLog)->unfanout();
    }

    /**
     * Handle the mod log "restored" event.
     *
     * @param  \App\ModLog  $modLog
     * @return void
     */
    public function restored(ModLog $modLog)
    {
        ModLogService::boot()->load($modLog)->fanout();
    }

    /**
     * Handle the mod log "force deleted" event.
     *
     * @param  \App\ModLog  $modLog
     * @return void
     */
    public function forceDeleted(ModLog $modLog)
    {
        ModLogService::boot()->load($modLog)->unfanout();
    }
}
