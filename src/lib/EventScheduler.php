<?php
namespace MockeryTest\lib;

class EventScheduler {
    public function scheduleEventUseStatic($timestamp) {
        if (\MockeryTest\lib\TimeUtils::isPastStatic($timestamp)) {
            return 'Event cannot be scheduled in the past.';
        } else {
            return 'Event scheduled successfully.';
        }
    }

    public function scheduleEvent($timestamp) {
        $class = new \MockeryTest\lib\TimeUtils();
        if ($class->isPast($timestamp)) {
            return 'Event cannot be scheduled in the past.';
        } else {
            return 'Event scheduled successfully.';
        }
    }

    public function scheduleEventWithTimezone($timestamp) {
        $class = new \MockeryTest\lib\TimeUtils();
        if ($class->isPastByTimeZone($timestamp, \MockeryTest\lib\TimeUtils::TIME_ZONE_TOKYO)) {
            return 'Event cannot be scheduled in the past.';
        } else {
            return 'Event scheduled successfully.';
        }
    }
}
