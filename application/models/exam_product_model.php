<?php 

/**
 * 
 */
class Exam_product_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
	}

	  function getClass()
    {
        $this->db->select('*');
        $this->db->from('class');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function addExamSubjectDetails($data)
    {

        if ($insert = $this->db->insert('exam_subject', $data)) {
            return true;
        }
    }

    public function getExamSubjectById($id)
    {
        $this->db->select('*');
        $this->db->where('s_id', $id);
        $this->db->from('exam_subject');
        $query_banner_data = $this->db->get();
        $query_banner_data->num_rows;
        return $query_banner_data->result_array();
    }
    function getAllSubjectByClass($id)
    {
        $this->db->select('*');
        $this->db->from('exam_subject');
        $this->db->where('class_id', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    function getExamSubjectList()
    {
        //echo 1; exit;
        $this->db->select('*');
        $this->db->from('exam_subject');
        $this->db->join('class', 'class.id = exam_subject.class_id');
        $query = $this->db->get();
        return $query->result_array();
    }

    function updateExamSubject($id, $update_cateorgy)
    {
        $this->db->where('s_id', $id);
        if ($this->db->update('exam_subject', $update_cateorgy)) {
            //echo $this->db->last_query();exit;
            return true;

        }
    }

    function deleteExamSubjectById($id)
    {
        $this->db->where('s_id', $id);
        $this->db->delete('exam_subject');
    }

    public function addExamChapterName($data)
    {

        if($insert = $this->db->insert('exam_chapter_name', $data))
        {
            //  print_r($add_category);exit;
            return true;
        }
    }
    function getExamChapterNames()
    {
        //echo 1; exit;
        $this->db->select('*');
        $this->db->from('exam_chapter_name');
        $this->db->join('class', 'class.id=exam_chapter_name.class_id');
        $this->db->join('exam_subject', 'exam_subject.s_id=exam_chapter_name.sub_id');
        $query = $this->db->get();
        return $query->result_array();
    }
    function getChapterNamesByID($id)
    {
        //echo 1; exit;
        $this->db->select('*');
        $this->db->where('chapter_name_id',$id);
        $this->db->from('exam_chapter_name');

        $query = $this->db->get();
        return $query->result_array();
    }

    function getChapterNamesBySubjectID($id)
    {
        $this->db->select('*');
        $this->db->from('exam_chapter_name');
        $this->db->where('sub_id', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    function updateExamChapterName($id,$update_cateorgy)
    {
        $this->db->where('chapter_name_id',$id);
        if($this->db->update('exam_chapter_name',$update_cateorgy))
        {
            //echo $this->db->last_query();exit;
            return true;

        }
    }
    function deleteChapterName($id){
        $this->db->where('chapter_name_id', $id);
        $this->db->delete('exam_chapter_name');
    }
    public function getExamChapterById($id)
    {
        $this->db->select('*');
        $this->db->where('chapter_id',$id);
        $this->db->from('exam_chapter');
        $query_banner_data = $this->db->get();
        $query_banner_data->num_rows;
        return $query_banner_data->result_array();
    }

    public function addExamChapterDetails($data)
    {

        if($insert = $this->db->insert('exam_chapter', $data))

        {
            //  print_r($add_category);exit;
            return true;
        }
    }

    function getExamChapterVideoList()
    {
        //echo 1; exit;chapter_name_id
        $this->db->select('*');
        $this->db->from('exam_chapter');
        $this->db->join('exam_chapter_name', 'exam_chapter.chapter_id_name=exam_chapter_name.chapter_name_id');
        $this->db->join('class', 'exam_chapter.class_id=class.id');
        $this->db->join('exam_subject', 'exam_chapter.subject_id=exam_subject.s_id');
        //$this->db->limit(3);
        $query = $this->db->get();
        //echo $this->db->last_query();exit;
        return $query->result_array();
    }

    function deleteExamChapterVideo($id){
        $this->db->where('chapter_id', $id);
        $this->db->delete('exam_chapter');
    }

    public function getExamChapterVideosByID($id)
    {
        $this->db->select('*');
        $this->db->where('chapter_id',$id);
        $this->db->from('exam_chapter');
        $query_banner_data = $this->db->get();
        $query_banner_data->num_rows;
        return $query_banner_data->result_array();
    }
    public function updateExamChapterVideo($id,$update_cateorgy)
    {
        $this->db->where('chapter_id',$id);
        if($this->db->update('exam_chapter',$update_cateorgy))
        {
            return true;

        }
    }



}

 ?>