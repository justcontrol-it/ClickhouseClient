<?php

namespace Tinderbox\Clickhouse\Common;

abstract class Format
{
    /**
     * CSV format.
     */
    const CSV = 'CSV';

    /**
     * TSV format.
     */
    const TSV = 'TSV';

    /**
     * TSV format.
     */
    const TSVRaw = 'TSVRaw';

    /**
     * JSON format.
     */
    const JSON = 'JSON';

    /**
     * JSON format.
     * @see https://clickhouse.yandex/docs/en/interfaces/formats/#jsoncompact
     */
    const JSONCompact = 'JSONCompact';
}
