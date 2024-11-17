import dayjs from 'dayjs'
import 'dayjs/locale/en'
import 'dayjs/locale/es'
import relativeTime from 'dayjs/plugin/relativeTime'

const validLocales = ['en', 'es', 'fr', 'de']
const dayjsWithLocale = (locale) => {
    if (validLocales.includes(locale)) {
        dayjs.locale(locale);
    } else {
        dayjs.locale('en');
    }

    return dayjs
};

dayjs.extend(relativeTime)

export { dayjsWithLocale }
