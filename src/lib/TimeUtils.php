<?php
namespace MockeryTest\lib;

class TimeUtils {

    const TIME_ZONE_TOKYO='Asia/Tokyo';
    const TIME_ZONE_UTC='UTC';

    public static function isPastStatic($timestamp) {
        $now = new \DateTime();
        $targetTime = new \DateTime();
        $targetTime->setTimestamp($timestamp);
        return $targetTime < $now;
    }

    public function isPast($timestamp) {
        $now = new \DateTime();
        $targetTime = new \DateTime();
        $targetTime->setTimestamp($timestamp);
        return $targetTime < $now;
    }

    public function isPastByTimeZone($timestamp, $timezone = null) {
        if (is_null($timezone)) {
            $timezone = static::TIME_ZONE_TOKYO;
        }
        $now = new \DateTime();
        $targetTime = new \DateTime();
        $targetTime->setTimestamp($timestamp);
        $now->setTimezone(new \DateTimeZone($timezone));
        $targetTime->setTimezone(new \DateTimeZone($timezone));
        return $targetTime < $now;
    }
}
