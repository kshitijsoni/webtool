## Week 11 - (Aug 10 - Aug 16) 

### Tasks scheduled for this week

- Implement Portuguese constituency parser. ![completed](https://img.shields.io/static/v1?label=&message=completed&color=green)
- Identify the projected LU using the `sklearn.metrics.pairwise` module. ![completed](https://img.shields.io/static/v1?label=&message=completed&color=green)
- Train SDEC to cluster LUs in FrameNet 1.7 and create semantic frame embeddings. ![completed](https://img.shields.io/static/v1?label=&message=completed&color=green)
- Identify the best-fitting frames for the projected LU using the `sklearn.metrics.pairwise` module on the embeddings of the project LU and the frame. ![completed](https://img.shields.io/static/v1?label=&message=completed&color=green)
- Create the attention mechanism using https://github.com/thomlake/pytorch-attention ![completed](https://img.shields.io/static/v1?label=&message=completed&color=green)
- Train the attention mechanism to learn to disambiguate LUs using the annotated sentences in Global FrameNet and exemplar sentences from FN 1.7 and FrameNet Brasil. ![completed](https://img.shields.io/static/v1?label=&message=completed&color=green)
- Apply the attention mechanism to the n-gram embeddings of a sentence to disambiguate the LU given the projected semantic frame. ![completed](https://img.shields.io/static/v1?label=&message=completed&color=green)
- Obtain the SegRNN model from https://github.com/swabhs/open-sesame. ![completed](https://img.shields.io/static/v1?label=&message=completed&color=green)
- Create the attention mechanism using https://github.com/thomlake/pytorch-attention and train it on the annotated sentences. Augment the SegRNN model with the trained attention mechanism. ![completed](https://img.shields.io/static/v1?label=&message=completed&color=green)
- Apply the augmented SegRNN on the unannotated sentences to label the semantic roles. ![completed](https://img.shields.io/static/v1?label=&message=completed&color=green)


### Challenges and solutions
It was challenging to use Open-Sesame on Python 3.7. I had to use the modified codes from https://github.com/free-soellingeraj/open-sesame/tree/master/sesame that have been made compatible with Python 3 and remove the lines that call the gpu:0 devices for DyNet. The pre-trained models were not working so I had to retrain the entire Open-Sesame parser.

### Tasks postponed to next week
None

### Observations

---
Remember to use tags! You can add multiple tags to any task.

![completed](https://img.shields.io/static/v1?label=&message=completed&color=green) = done and ready for User Acceptance Testing (UAT)<br>
![uat-passed](https://img.shields.io/static/v1?label=UAT&message=passed&color=success) = tested and ready to merge with Master<br>
![deployed](https://img.shields.io/static/v1?label=&message=deployed&color=success) = merged with Master<br>
![carryover](https://img.shields.io/static/v1?label=&message=carryover&color=yellow) = task deferred from one week to the next<br>
![help](https://img.shields.io/static/v1?label=&message=need_help&color=blue) = needs help from mentors<br>
![definition](https://img.shields.io/static/v1?label=&message=needs_definition&color=orange) = **blocked** task that needs discussion with mentors<br>
![stretch](https://img.shields.io/static/v1?label=&message=stretch&color=orange) = stretch goal <br>
![important](https://img.shields.io/static/v1?label=&message=important&color=red) = something that needs to be addressed immediately<br>


Use [Shields.io](https://shields.io) to creat new tags if needed.
