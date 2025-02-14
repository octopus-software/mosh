export type SeekerRankingType = {
    target_department_id: number,
    target_department_name: string,
    desired_seeker_id: number,
    desired_seeker_name: string,
    ranking: {
        name: string,
        score: number
    }[]
}
