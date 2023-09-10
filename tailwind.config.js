/** @type {import('tailwindcss').Config} config */
import typography from '@tailwindcss/typography';
import defaultTheme from 'tailwindcss/defaultTheme.js';
import colors from 'tailwindcss/colors.js'

const config = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['"Open Sans"', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        'alt-link': colors.sky['600']
      },

      // TODO where can i view what is in this magical theme object?
      typography: (theme) => ({
        DEFAULT: {
          css: {
            '--tw-prose-body': '#3a4149',

            a: {
              // TODO how can i set this to be used as a variable

              color: theme('colors.blue.500'),
              textDecoration: 'none',
              "&:hover": {
                textDecoration: 'underline',
              }
            },

            code: {
              color: theme('colors.red.500'),
              backgroundColor: theme('colors.red.50'),
              borderRadius: "4px",
              // "&::before": {
              //   content: '"" !important',
              // },
              // "&::after": {
              //   content: '"" !important',
              // },
            },
            h1: {
              fontWeight: 'bold',
            }
          },
        },
      }),
    },
  },
  plugins: [typography],
};

export default config;
