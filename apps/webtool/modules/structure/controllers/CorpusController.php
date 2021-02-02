<?php

class CorpusController extends MController
{

    private $idLanguage;

    public function init()
    {
        parent::init();
        $this->idLanguage = Manager::getSession()->idLanguage;
    }

    public function main()
    {
        $this->data->isMaster = Manager::checkAccess('MASTER', A_EXECUTE) ? 'true' : 'false';
        $this->render();
    }

    public function corpusTree()
    {
        $structure = Manager::getAppService('structurecorpus');
        if ($this->data->id == '') {
            $children = $structure->listCorpus($this->data, $this->idLanguage);
            $data = (object)[
                'id' => 'root',
                'state' => 'open',
                'text' => 'Corpus',
                'children' => $children
            ];
            $json = json_encode([$data]);
        } elseif ($this->data->id{0} == 'c') {
            $json = json_encode($structure->listDocuments(substr($this->data->id, 1), $this->idLanguage));
        }
        $this->renderJson($json);
    }

    public function formNewCorpus()
    {
        $this->data->save = "@structure/corpus/newCorpus|formNewCorpus";
        $this->data->close = "!$('#formNewCorpus_dialog').dialog('close');";
        $this->data->title = _M('new fnbr\models\Corpus');
        $this->render();
    }

    public function formUpdateCorpus()
    {
        $model = new fnbr\models\Corpus($this->data->id);
        $this->data->object = $model->getData();
        $this->data->object->entry = strtolower(str_replace('crp_', '', $this->data->object->entry));
        $this->data->save = "@structure/corpus/updateCorpus|formUpdateCorpus";
        $this->data->close = "!$('#formUpdateCorpus_dialog').dialog('close');";
        $this->data->title = 'Corpus: ' . $model->getEntry() . '  [' . $model->getName() . ']';
        $this->render();
    }

    public function formNewDocument()
    {
        $this->data->idCorpus = $this->data->id;
        $model = new fnbr\models\Corpus($this->data->idCorpus);
        $this->data->corpus = $model->getEntry() . '  [' . $model->getName() . ']';
        $this->data->save = "@structure/corpus/newDocument|formNewDocument";
        $this->data->close = "!$('#formNewDocument_dialog').dialog('close');";
        $this->data->title = _M('new fnbr\models\Document');
        $this->render();
    }

    public function formUpdateDocument()
    {
        $model = new fnbr\models\Document($this->data->id);
        $this->data->object = $model->getData();
        $this->data->save = "@structure/corpus/updateDocument|formUpdateDocument";
        $this->data->close = "!$('#formUpdateDocument_dialog').dialog('close');";
        $this->data->title = 'Document: ' . $model->getEntry() . '  [' . $model->getName() . ']';
        $this->render();
    }

    public function formNewDocumentMM()
    {
        $this->data->idCorpus = $this->data->id;
        $model = new fnbr\models\Corpus($this->data->idCorpus);
        $this->data->corpus = $model->getEntry() . '  [' . $model->getName() . ']';
        $this->data->save = "@structure/corpus/newDocumentMM|formNewDocumentMM";
        $this->data->close = "!$('#formNewDocumentMM_dialog').dialog('close');";
        $this->data->title = _M('new Document Multimodal');
        $this->render();
    }


    public function newCorpus()
    {
        try {
            $model = new fnbr\models\Corpus();
            $this->data->corpus->entry = 'crp_' . strtolower(str_replace('crp_', '', $this->data->corpus->entry));
            $model->setData($this->data->corpus);
            $model->save($this->data->corpus);
            $this->renderPrompt('information', 'OK', "structure.editEntry('{$this->data->corpus->entry}');");
        } catch (\Exception $e) {
            $this->renderPrompt('error', $e->getMessage());
        }
    }

    public function updateCorpus()
    {
        try {
            $model = new fnbr\models\Corpus($this->data->corpus->idCorpus);
            $this->data->corpus->entry = 'crp_' . strtolower(str_replace('crp_', '', $this->data->corpus->entry));
            $model->updateEntry($this->data->corpus->entry);
            $this->renderPrompt('information', 'OK', "structure.editEntry('{$this->data->corpus->entry}');");
        } catch (\Exception $e) {
            $this->renderPrompt('error', $e->getMessage());
        }
    }

    public function newDocument()
    {
        try {
            $model = new fnbr\models\Document();
            $this->data->document->entry = 'doc_' . $this->data->document->entry;
            $model->setData($this->data->document);
            $model->save($this->data->document);
            $this->renderPrompt('information', 'OK', "structure.editEntry('{$this->data->document->entry}');");
        } catch (\Exception $e) {
            $this->renderPrompt('error', $e->getMessage());
        }
    }

    public function updateDocument()
    {
        try {
            $model = new fnbr\models\Document($this->data->document->idDocument);
            $model->updateEntry($this->data->document->entry);
            $model->setData($this->data->document);
            $model->save($this->data->document);
            $this->renderPrompt('information', 'OK', "structure.editEntry('{$this->data->document->entry}');");
        } catch (\Exception $e) {
            $this->renderPrompt('error', $e->getMessage());
        }
    }

    public function newDocumentMM()
    {
        try {
            $model = new fnbr\models\DocumentMM();
            $this->data->documentmm->entry = 'doc_' . $this->data->documentmm->entry;
            $model->save($this->data->documentmm);
            $this->renderPrompt('information', 'OK', "structure.editEntry('{$this->data->document->entry}');");
        } catch (\Exception $e) {
            $this->renderPrompt('error', $e->getMessage());
        }
    }

    public function formSentences()
    {
        $this->data->idDocument = $this->data->id;
        $model = new fnbr\models\Document($this->data->idDocument);
        $this->data->title = $model->getName();
        $this->render();
    }

    public function sentences()
    {
        $this->data->idDocument = $this->data->id;
        $model = new fnbr\models\Document($this->data->idDocument);
        $sentences = json_encode($model->listSentence()->getResult());
        $this->renderJson($sentences);
    }

    public function formPreprocessingDocumentMM()
    {
        $model = new fnbr\models\Document($this->data->id);
        $this->data->object = $model->getData();
        $language = new fnbr\models\Language();
        $this->data->languages = $language->listAll()->asQuery()->chunkResult('idLanguage', 'language');
        $this->data->save = "@structure/corpus/preprocessingDocumentMM|formPreprocessingDocumentMM";
        $this->data->close = "!$('#formPreprocessingDocumentMM_dialog').dialog('close');";
        $this->data->title = 'Document: ' . $model->getName();
        mdump($this->data->object);
        $this->render();
    }

    public function preprocessingDocumentMM()
    {
        try {
            $user = fnbr\models\Base::getCurrentUser();
            $documentMMService = Manager::getAppService('documentmm');
            $video = $this->data->document;
            $fileOk = (isset($_FILES['localfile'])) || ($video->webfile != '');
            if ($fileOk) {
                if ($video->webfile == '') {
                    $files = Mutil::parseFiles('localfile');
                    $video->localfile = $files[0];
                }
                $documentMMService->uploadVideo($video);
                $this->renderPrompt('information',"OK. File will be processed. A notification will be sent to {$user->getEmail()}.");
            } else {
                $this->renderPrompt('error',"No file informed.");
            }
        } catch (\Exception $e) {
            $this->renderPrompt('error', "Error preprocessing Document MM. " . $e->getMessage());
        }
    }


}
