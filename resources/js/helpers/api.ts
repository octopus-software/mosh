import axios from "axios";
import {useToast} from "vue-toast-notification";

/**
 * GET通信を行う
 * @param url
 * @param data
 */
export const apiGet = async (url: string, data: any = []) => axios.get(url, data)

/**
 * DELETE通信を行う
 * @param url
 * @param successMessage
 */
export const apiDelete = async (url: string, successMessage:string) => {
    const toaster = useToast()
    return await axios.delete(url).then(response => {
        response.status === 200 ? toaster.success(successMessage) : toaster.error(response.data.message);
        return true
    }) .catch(error => {
        toaster.error('予期せぬエラーが発生しました: ' + error.response.data.message);
        return false
    })

}

/**
 * POST通信を行う
 * @param url
 * @param successMessage
 * @param data
 */
export const apiPost = async (url: string, successMessage:string, data: any = []) => {
    const toaster = useToast()
    return await axios.post(url, data).then(response => {
        response.status === 200 ? toaster.success(successMessage) : toaster.error(response.data.message);
        return true
    }) .catch(error => {
        toaster.error('予期せぬエラーが発生しました: ' + error.response.data.message);
        return false
    })
}

/**
 * PUT通信を行う
 * @param url
 * @param successMessage
 * @param data
 */
export const apiPut = async (url: string, successMessage:string, data: any = []) => {
    const toaster = useToast()
    await axios.put(url, data).then(response => {
        response.status === 200 ? toaster.success(successMessage) : toaster.error(response.data.message);
    }) .catch(error => {
        toaster.error('予期せぬエラーが発生しました: ' + error.response.data.message);
    })
}
