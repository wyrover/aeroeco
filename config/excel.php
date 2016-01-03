<?php

return array(
    'cache'      => array(
        'enable'   => true,
        'driver'   => 'memory',
        'settings' => array(
            'memoryCacheSize' => '32MB',
            'cacheTime'       => 600
        ),
        'memcache' => array(
            'host' => 'localhost',
            'port' => 11211,
        ),
        'dir'      => storage_path('cache')
    ),
    'properties' => array(
        'creator'        => 'Maatwebsite',
        'lastModifiedBy' => 'Maatwebsite',
        'title'          => 'Spreadsheet',
        'description'    => 'Default spreadsheet export',
        'subject'        => 'Spreadsheet export',
        'keywords'       => 'maatwebsite, excel, export',
        'category'       => 'Excel',
        'manager'        => 'Maatwebsite',
        'company'        => 'Maatwebsite',
    ),
    'sheets'     => array(
        'pageSetup' => array(
            'orientation'           => 'portrait',
            'paperSize'             => '9',
            'scale'                 => '100',
            'fitToPage'             => false,
            'fitToHeight'           => true,
            'fitToWidth'            => true,
            'columnsToRepeatAtLeft' => array('', ''),
            'rowsToRepeatAtTop'     => array(0, 0),
            'horizontalCentered'    => false,
            'verticalCentered'      => false,
            'printArea'             => null,
            'firstPageNumber'       => null,
        ),
    ),
    'creator'    => 'Maatwebsite',
    'csv'        => array(
        'delimiter'   => ',',
        'enclosure'   => '"',
        'line_ending' => "\r\n"
    ),
    'export'     => array(
        'autosize'                    => true,
        'autosize-method'             => PHPExcel_Shared_Font::AUTOSIZE_METHOD_APPROX,
        'generate_heading_by_indices' => true,
        'merged_cell_alignment'       => 'left',
        'calculate'                   => false,
        'includeCharts'               => false,
        'sheets'                      => array(
            'page_margin'          => false,
            'nullValue'            => null,
            'startCell'            => 'A1',
            'strictNullComparison' => false
        ),
        'store'                       => array(
            'path'       => storage_path('exports'),
            'returnInfo' => false
        ),
        'pdf'                         => array(
            'driver'  => 'tcPDF',
            'drivers' => array(
                'DomPDF' => array(
                    'path' => base_path('vendor/dompdf/dompdf/')
                ),
                'tcPDF'  => array(
                    'path' => base_path('vendor/tecnickcom/tcpdf/')
                ),
                'mPDF'   => array(
                    'path' => base_path('vendor/mpdf/mpdf/')
                ),
            )
        )
    ),
    'filters'    => array(
        'registered' => array(
            'chunk' => 'Maatwebsite\Excel\Filters\ChunkReadFilter'
        ),
        'enabled'    => array()
    ),

    'import'     => array(
        'heading'                 => 'slugged',
        'startRow'                => 1,
        'separator'               => '_',
        'includeCharts'           => false,
        'to_ascii'                => true,
        'encoding'                => array(
            'input'  => 'UTF-8',
            'output' => 'UTF-8'
        ),
        'calculate'               => true,
        'ignoreEmpty'             => false,
        'force_sheets_collection' => false,
        'dates'                   => array(
            'enabled' => true,
            'format'  => false,
            'columns' => array()
        ),
        'sheets'  => array(
            'test' => array(
                'firstname' => 'A2'
            )
        )
    ),
    'views'      => array(
        'styles' => array(
            'th'     => array(
                'font' => array(
                    'bold' => true,
                    'size' => 12,
                )
            ),
            'strong' => array(
                'font' => array(
                    'bold' => true,
                    'size' => 12,
                )
            ),
            'b' => array(
                'font' => array(
                    'bold' => true,
                    'size' => 12,
                )
            ),
            'i' => array(
                'font' => array(
                    'italic' => true,
                    'size'   => 12,
                )
            ),
            'h1' => array(
                'font' => array(
                    'bold' => true,
                    'size' => 24,
                )
            ),
            'h2' => array(
                'font' => array(
                    'bold' => true,
                    'size' => 18,
                )
            ),
            'h3' => array(
                'font' => array(
                    'bold' => true,
                    'size' => 13.5,
                )
            ),
            'h4' => array(
                'font' => array(
                    'bold' => true,
                    'size' => 12,
                )
            ),
            'h5' => array(
                'font' => array(
                    'bold' => true,
                    'size' => 10,
                )
            ),
            'h6' => array(
                'font' => array(
                    'bold' => true,
                    'size' => 7.5,
                )
            ),
            'a' => array(
                'font' => array(
                    'underline' => true,
                    'color'     => array('argb' => 'FF0000FF'),
                )
            ),
            'hr' => array(
                'borders' => array(
                    'bottom' => array(
                        'style' => 'thin',
                        'color' => array('FF000000')
                    ),
                )
            )
        )
    )
);
